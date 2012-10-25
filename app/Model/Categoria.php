class Categoria extends AppModel {
    
    var $name = 'Categoria';
   
   
    // many to many relationship
    var $hasMany = array(
        'Articulo'=>array(
            'className'=>'Articulo'
        )
    );
}