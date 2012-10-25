class Movimiento extends AppModel {
    
    var $name = 'Movimiento';
   
    // Relationships
    var $belongsTo = array(
        'Proveedor'=>array(
            'className'=>'Proveedor'
        ),
        'Cliente'=>array(
            'className'=>'Cliente'
        )
    );
   
    // many to many relationship
    var $hasMany = array(
        'Item'=>array(
            'className'=>'Item'
        )
    );
}