<?php
$familiesArray = [
  // Familia Oviparos
  [
    'nombre_familia' => 'oviparos',
    'especies' => [
      [
        'nombre_especie' => 'aves',
        'animales_especie' => [
          ['nombre_animal'=>'avestruz','caracteriticas_animal'=>'larga cabeza y corredora rapida'],
          ['nombre_animal'=>'gallinas','caracteriticas_animal'=>'ponen huevos para comer, cantan en la madrugada'],
          ['nombre_animal'=>'pato','caracteriticas_animal'=>'blancos, negros, marrones, hacen cua cua'],
        ]
      ],
      [
        'nombre_especie' => 'peces',
        'animales_especie' => [
          ['nombre'=>'payaso','caracteriticas'=>'rayas naranja con rayas blancas, bordes de color negro'],
          ['nombre'=>'raya','caracteriticas'=>'cola  largas,  filosa, sin huesos'],
          ['nombre'=>'betta','caracteriticas'=>'enterrar su cuerpo en la tierra húmeda, de color rojo o azul o verde o todos']
        ]
      ],
      [
        'nombre_especie' => 'anfibios',
        'animales_especie' => [
          ['nombre'=>'sapo','caracteriticas'=>'piel rugosa, oscura, gordos, y lentos'],
          ['nombre'=>'rana','caracteriticas'=>'piel lisa y humeda'],
          ['nombre'=>'salamandras','caracteriticas'=>'cola de forma cilíndrica'],
        ]
      ],
      [
        'nombre_especie' => 'reptiles',
        'animales_especie' => [
          ['nombre'=>'cobra','caracteriticas'=>'come roedores, aves y serpientes, se arrastra, escupe veneno'],
          ['nombre'=>'caiman','caracteriticas'=>'comen peces, moluscos, caracoles, vive en aguas dulces'],
          ['nombre'=>'iguana','caracteriticas'=>'piel escamosa y verde, cola larga, papada, pequeñas espinas se sube en los arboles'],
        ]
      ],
      [
        'nombre_especie' => 'invertebrados',
        'animales_especie' => [
          ['nombre'=>'mosca','caracteriticas'=>'rotando sus patas, color verde o negras, grandes ojos'],
          ['nombre'=>'hormiga','caracteriticas'=>'negras, rojizas, café, pardas o amarillentas. tienen dos antenas que salen de su cabeza'],
          ['nombre'=>'mosquito','cuerpo delgado y alargado, con dos pares de alas, pican, succionan sangre'],
        ]
      ],
    ]
  ],
  // Familia Mamiferos
  [
    'nombre_familia' => 'mamiferos',
    'especies' => [
      [
        'nombre_especie' => 'prototerios',
        'animales_especie' => [
          ['nombre'=>'ornitorrincos','caracteriticas'=>'cola  ancha y plana y venenoso'],
          ['nombre'=>'equidnas','caracteriticas'=>'pelaje denso ,afiladas y largas púas
          '],
        ]
      ],
      [
        'nombre_especie' => 'marsupiales',
        'animales_especie' => [
          ['nombre'=>'Zarigüeyas','caracteriticas'=>'rcuerpo macizo, cuello rechoncho y hocico alargado y agudo. Las patas son cortas'],
          ['nombre'=>'Canguros','caracteriticas'=>'grandes  patas traseras, grandes pies  para saltar, una cola larga y una cabeza pequeña'],
          ['nombre'=>'koalas','caracteriticas'=>'cara ancha, con grandes ojos, y orejas redondas y pilosas'],
        ]
      ],
      [
        'nombre_especie' => 'Eutherios',
        'animales_especie' => [
          ['nombre'=>'perro','caracteriticas'=>'mascota, tienen pelopelo, ladra'],
          ['nombre'=>'gato','caracteriticas'=>'maulla, pequeño, mascota'],
          ['nombre'=>'leon','caracteriticas'=>'mucho pelo en la cabeza, viven en la selva, son amarillos, feroces, comen carne'],
        ]
      ],
    ]
  ],
];
foreach ($familiesArray as $family) {
  echo "Nombre de la familia: ". $family['nombre_familia'];
  echo "</br>";
  echo "especies de esa familia: ";
  echo "</br>";
  foreach( $family['especies'] as $especie ){
    echo $especie['nombre_especie'];
    echo "</br>";
  }
  echo "</br>";
  echo "</br>";
}
?>
