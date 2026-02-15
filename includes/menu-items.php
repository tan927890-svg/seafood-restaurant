<?php
// Menu items data
$menuItems = [
    [
        'icon' => '🦞',
        'name' => 'Tôm Hùm Alaska',
        'description' => 'Tôm hùm Alaska tươi sống nướng bơ tỏi, hương vị đậm đà khó cưỡng',
        'price' => '1.200.000đ/kg'
    ],
    [
        'icon' => '🦀',
        'name' => 'Cua Hoàng Đế',
        'description' => 'Cua hoàng đế hấp bia thơm ngon, thịt chắc ngọt tự nhiên',
        'price' => '2.500.000đ/con'
    ],
    [
        'icon' => '🐟',
        'name' => 'Cá Hồi Na Uy',
        'description' => 'Cá hồi Na Uy áp chảo hoàn hảo, giàu omega-3 bổ dưỡng',
        'price' => '450.000đ'
    ],
    [
        'icon' => '🦑',
        'name' => 'Mực Hấp Gừng',
        'description' => 'Mực tươi hấp gừng sả, giữ nguyên độ ngọt tự nhiên',
        'price' => '350.000đ'
    ],
    [
        'icon' => '🦐',
        'name' => 'Tôm Sú Rang Muối',
        'description' => 'Tôm sú size lớn rang muối ớt thơm lừng, giòn tan',
        'price' => '550.000đ/kg'
    ],
    [
        'icon' => '🦪',
        'name' => 'Hàu Tươi Sống',
        'description' => 'Hàu tươi Pháp cao cấp, ăn sống với chanh và wasabi',
        'price' => '80.000đ/con'
    ]
];

// Display menu items
foreach ($menuItems as $item) {
    echo '<div class="menu-item">';
    echo '<span class="menu-icon">' . $item['icon'] . '</span>';
    echo '<h3>' . htmlspecialchars($item['name']) . '</h3>';
    echo '<p>' . htmlspecialchars($item['description']) . '</p>';
    echo '<span class="price">' . htmlspecialchars($item['price']) . '</span>';
    echo '</div>';
}
?>