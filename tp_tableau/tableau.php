<?php

return [
    'users'=>[
        [
            'id'=>'1',
            'firstName'=>'Alain',
            'name'=>'Cuvelier',
            'email'=>'launaydeshaies@hotmail.fr',
            'isAdmin'=>false,
            'contactDetails'=>[
                'address'=>[
                    [
                    'name'=>'maison',
                    'address1'=>'99 Grande Rue'
                    ],
                    [
                    'name'=>'bureau',
                    'address2'=> 'Viaformation',
                    ]
                ],
                'phoneNumber'=>'06 21 34 82 66',
                'formattedDetails' => implode(', ', ['99 Grande Rue', '06 21 34 82 66'])
            ],
            'posts'=>[
                [
                    'id'=>'1',
                    'title'=>'VanLife',
                    'excerpt'=>'ceci est un extrait',
                    'comments'=>[
                        ['content'=>'ceci est un commentaire']
                    ]             
                ]         
            ]       
  
        ]
    ]    
];
?>
