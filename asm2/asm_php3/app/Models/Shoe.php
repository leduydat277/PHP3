<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'color',
        'price',
        'image',
        'quantity',
        'content',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function search($keyword) {
        global $conn; // Giả sử $conn là biến kết nối CSDL của bạn

        $keyword = "%" . $keyword . "%";
        $query = "SELECT * FROM products WHERE name LIKE ? OR description LIKE ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $keyword, $keyword);
        $stmt->execute();
        $result = $stmt->get_result();

        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        $stmt->close();

        return $products;
    }
}
