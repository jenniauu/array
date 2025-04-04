<?php
$img1 = 'images/discoblue.png';
$img2 = 'images/discopurple.jfif';
$img3 = 'images/hklaptop.jfif';
$img4 = 'images/hkpink.jfif';
$img5 = 'images/hkyellow.jfif';
$img6 = 'images/radiopink.jfif';
$img7 = 'images/sonyblue.jpeg';
$img8 = 'images/sonypink.png';
$img9 = 'images/sprintcel.jfif';
$img10 = 'images/tamagotchi.jfif';


$produtos1 = [
    [
        'nome' => 'Disco Player Blue',
        'preco' => 49.99,
        'imagem' => $img1,
        'quantidade' => 57,
        'observacoes' => 'Produto de alta qualidade'
    ],
    [
        'nome' => 'Hello Kitty Radio Pink',
        'preco' => 69.99,
        'imagem' => $img4,
        'quantidade' => 52,
        'observacoes' => 'Produto popular'
    ],
    [
        'nome' => 'Hello Kitty Laptop',
        'preco' => 99.99,
        'imagem' => $img3,
        'quantidade' => 50,
        'observacoes' => 'Produto em promoção'
    ],
    [
        'nome' => 'Sonic Pink Music Player',
        'preco' => 39.99,
        'imagem' => $img8,
        'quantidade' => 51,
        'observacoes' => 'Produto de alta qualidade'
    ],
    [
        'nome' => 'Tamagotchi',
        'preco' => 29.99,
        'imagem' => $img10,
        'quantidade' => 55,
        'observacoes' => 'Produto popular'
    ]
];

$produtos2 = [
    [
        'nome' => 'Disco Player Purple',
        'preco' => 49.99,
        'imagem' => $img2,
        'quantidade' => 53,
        'observacoes' => 'Produto de alta qualidade'
    ],
    [
        'nome' => 'Hello Kitty Radio Yellow',
        'preco' => 69.99,
        'imagem' => $img5,
        'quantidade' => 59,
        'observacoes' => 'Produto popular'
    ],
    [
        'nome' => 'Sprint Cellphone',
        'preco' => 149.99,
        'imagem' => $img9,
        'quantidade' => 58,
        'observacoes' => 'Produto em promoção'
    ],
    [
        'nome' => 'Sonic Blue Music Player',
        'preco' => 29.99,
        'imagem' => $img7,
        'quantidade' => 56,
        'observacoes' => 'Produto de alta qualidade'
    ],
    [
        'nome' => 'Radio Pink',
        'preco' => 59.99,
        'imagem' => $img6,
        'quantidade' => 54,
        'observacoes' => 'Produto popular'
    ]
];

echo '<table>';
echo '<tr>';
foreach ($produtos1 as $produto) {
    echo '<td>';
    echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '" width="50"><br>';
    echo '<p class="p1">' . $produto['nome'] . '</p>';
    echo '<span class="preco">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</span><br>';
    echo '<span class="quantidade">Quantidade:</span> ' . $produto['quantidade'];
    echo '</td>';
}
echo '</tr>';
echo '</table>';
echo '<div></div>';
echo '<table>';
echo '<tr>';
foreach ($produtos2 as $produto) {
    echo '<td>';
    echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '" width="50"><br>';
    echo '<p class="p1">' . $produto['nome'] . '</p>';
    echo '<span class="preco">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</span><br>';
    echo '<span class="quantidade">Quantidade:</span> ' . $produto['quantidade'];
    echo '</td>';
}
echo '</tr>';
echo '</table>';

?>