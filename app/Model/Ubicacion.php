class Ubicacion extends AppModel {
    
    var $name = 'Ubicacion';
   
   
    // many to many relationship
    var $hasMany = array(
        'Articulo'=>array(
            'className'=>'Articulo'
        )
    );
}