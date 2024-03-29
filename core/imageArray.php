<?php

$brand = [
    [
        'id'=> 1,
        'name' => 'Logo',
        'imagePath' => 'Assests/Images/Brand/Logo.svg',
        'description' => ''
    ],
    [
        'id'=> 2,
        'name' => 'Mascot',
        'imagePath' => 'Assests/Images/Brand/Mascot.svg',
        'description' => ''
    ],
];


$home = [
    [
        'id'=> 1,
        'name' => 'iconUSA',
        'imagePath' => 'Assests/Images/HomePage/iconUSA.svg',
        'description' => ''
    ],
    [
        'id'=> 2,
        'name' => 'iconEarth',
        'imagePath' => 'Assests/Images/HomePage/iconEarth.svg',
        'description' => ''
    ],
    [
        'id'=> 3,
        'name' => 'iconJetpack',
        'imagePath' => 'Assests/Images/HomePage/iconJetpack.svg',
        'description' => ''
    ], 
    [
        'id'=> 4,
        'name' => 'iconLove',
        'imagePath' => 'Assests/Images/HomePage/iconLove.svg',
        'description' => ''
    ], 
    [
        'id'=> 5,
        'name' => 'domainBoardPlain',
        'imagePath' => 'Assests/Images/HomePage/domainBoardPlain.png',
        'description' => ''
    ],  
    [
        'id'=> 6,
        'name' => 'domainSurfboard',
        'imagePath' => 'Assests/Images/HomePage/domainSurfboard.png',
        'description' => ''
    ], 
    [
        'id'=> 7,
        'name' => 'poloroidOne',
        'imagePath' => 'Assests/Images/HomePage/poloroidOne.jpg',
        'description' => ''
    ], 
    [
        'id'=> 8,
        'name' => 'poloroidTwo',
        'imagePath' => 'Assests/Images/HomePage/poloroidTwo.jpg',
        'description' => ''
    ],      
];

$shop = [
    [
        'id'=> 1,
        'name' => '',
        'imagePath' => '',
        'description' => ''
    ]
];




//Match ID with Mysql ID
$products = [
    [
        'id'=> 1,
        'name' => 'Sikyo',
        'productImages' => [
            'PathOne' => 'Assests/Images/Shop/Products/surfboard-1/back.webp',
            'PathTwo' => 'Assests/Images/Shop/Products/surfboard-1/close-bottom.webp',
            'PathThree' => 'Assests/Images/Shop/Products/surfboard-1/close-top.webp',
            'PathFour' => 'Assests/Images/Shop/Products/surfboard-1/front.webp',
        ] 
    ],
    [
        'id'=> 2,
        'name' => 'Flow',
        'productImages' => [
            'PathOne' => 'Assests/Images/Shop/Products/surfboard-2/back.webp',
            'PathTwo' => 'Assests/Images/Shop/Products/surfboard-2/close-bottom.webp',
            'PathThree' => 'Assests/Images/Shop/Products/surfboard-2/close-top.webp',
            'PathFour' => 'Assests/Images/Shop/Products/surfboard-2/front.webp',
        ] 
    ], 
    [
        'id'=> 3,
        'name' => 'Roamer',
        'productImages' => [
            'PathOne' => 'Assests/Images/Shop/Products/surfboard-3/back.webp',
            'PathTwo' => 'Assests/Images/Shop/Products/surfboard-3/close-bottom.webp',
            'PathThree' => 'Assests/Images/Shop/Products/surfboard-3/close-top.webp',
            'PathFour' => 'Assests/Images/Shop/Products/surfboard-3/front.webp',
        ] 
    ],   
];

$journal = [
    [
        'id'=> 1,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-1.jpg',
        'description' => ''
    ],
    [
        'id'=> 2,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-2.jpg',
        'description' => ''
    ],
    [
        'id'=> 3,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-3.jpeg',
        'description' => ''
    ],
    [
        'id'=> 4,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-4.jpeg',
        'description' => ''
    ],
    [
        'id'=> 5,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-5.jpg',
        'description' => ''
    ],
    [
        'id'=> 6,
        'imagePath' => 'Assests/Images/Journal/Journal-Img-6.jpg',
        'description' => ''
    ],
];


//This Function allows me to put any array above into the parameters with a matching Id to find the corresponding ImagePath

function imagePath($imageArray, $id){
    foreach($imageArray as $item){
        if($item['id']== $id){
            return $item['imagePath'];
            
        };
    };
    return null; // this returns null if no matching ID is found
  
};


/*function productPath($item, function ){
    foreach($productID as )
}


function productImage($productImageArray,){

}

*/