<?php
if (isset($_POST)) {
  $arrayAnimals = [
    'oviparos' => [
      'especies' => [
      
        'aves' => [

          ['nombre'=>'avestruz','caracteriticas'=>'larga cabeza y corredora rapida'],

          ['nombre'=>'gallinas','caracteriticas'=>'ponen huevos para comer, cantan en la madrugada'],

           ['nombre'=>'pato','caracteriticas'=>'blancos, negros, marrones, hacen cua cua'],

 
        ],
/*--------------------------------------------------------------------------------------*/
        'peces' => [
          ['nombre'=>'payaso','caracteriticas'=>'rayas naranja con rayas blancas, bordes de color negro'],
          ['nombre'=>'raya','caracteriticas'=>'cola  largas,  filosa, sin huesos'],
          ['nombre'=>'betta','caracteriticas'=>'enterrar su cuerpo en la tierra húmeda, de color rojo o azul o verde o todos'],


        ],
        /*--------------------------------------------------------------------------------------*/

        'anfibios' => [
          ['nombre'=>'sapo','caracteriticas'=>'piel rugosa, oscura, gordos, y lentos'],
          ['nombre'=>'rana','caracteriticas'=>'piel lisa y humeda'],
          ['nombre'=>'salamandras','caracteriticas'=>'cola de forma cilíndrica'],
          

        ],
        /*--------------------------------------------------------------------------------------*/

        'reptiles' => [
          ['nombre'=>'cobra','caracteriticas'=>'come roedores, aves y serpientes, se arrastra, escupe veneno'],
          ['nombre'=>'caiman','caracteriticas'=>'comen peces, moluscos, caracoles, vive en aguas dulces'],
           ['nombre'=>'iguana','caracteriticas'=>'piel escamosa y verde, cola larga, papada, pequeñas espinas se sube en los arboles'],


        ],
        /*--------------------------------------------------------------------------------------*/


        'invertebrados' => [
          ['nombre'=>'mosca','caracteriticas'=>'rotando sus patas, color verde o negras, grandes ojos'],
          ['nombre'=>'hormiga','caracteriticas'=>'negras, rojizas, café, pardas o amarillentas. tienen dos antenas que salen de su cabeza'],
           ['nombre'=>'mosquito','cuerpo delgado y alargado, con dos pares de alas, pican, succionan sangre'],

        ]
      ]
    ]
 /*---------s---------------------MAMIFEROS-------------------------------*/

 'mamiferos' => [
      'especies' => [
      

        'prototerios:' => [

          ['nombre'=>'ornitorrincos','caracteriticas'=>'cola  ancha y plana y venenoso'],

          ['nombre'=>'equidnas','caracteriticas'=>'pelaje denso ,afiladas y largas púas
 '],

           
        ],
/*--------------------------------------------------------------------------------------*/
        'Marsupiales' => [
          ['nombre'=>'Zarigüeyas','caracteriticas'=>'rcuerpo macizo, cuello rechoncho y hocico alargado y agudo. Las patas son cortas'],
          ['nombre'=>'Canguros','caracteriticas'=>'grandes  patas traseras, grandes pies  para saltar, una cola larga y una cabeza pequeña'],
          ['nombre'=>'koalas','caracteriticas'=>'cara ancha, con grandes ojos, y orejas redondas y pilosas'],

        ],
        /*--------------------------------------------------------------------------------------*/

        'Eutherios' => [
          ['nombre'=>'perro','caracteriticas'=>'mascota, tienen pelopelo, ladra'],
          ['nombre'=>'gato','caracteriticas'=>'maulla, pequeño, mascota'],
          ['nombre'=>'leon','caracteriticas'=>'mucho pelo en la cabeza, viven en la selva, son amarillos, feroces, comen carne'],


        ],
        
      ]
    ]
















  ];
}

?>
