class Item extends AppModel {
    
    var $name = 'Item';
   
    // Relationships
    var $belongsTo = array(
        'Movimiento'=>array(
            'className'=>'Movimiento'
        ),
        'Articulo'=>array(
            'className'=>'Articulo'
        )
    );
   
   
}