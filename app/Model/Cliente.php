class Cliente extends AppModel {
    
    var $name = 'Cliente';
   
   
    // many to many relationship
    var $hasMany = array(
        'Movimiento'=>array(
            'className'=>'Movimiento'
        )
    );
}