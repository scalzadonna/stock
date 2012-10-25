class Proveedor extends AppModel {
    
    var $name = 'Proveedor';
   
   
    // many to many relationship
    var $hasMany = array(
        'Articulo'=>array(
            'className'=>'Articulo'
        ),
		'Movimiento'=>array(
            'className'=>'Movimiento'
        )
    );
}