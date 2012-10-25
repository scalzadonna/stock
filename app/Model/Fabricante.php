class Fabricante extends AppModel {
    
    var $name = 'Fabricante';
   
   
    // many to many relationship
    var $hasMany = array(
        'Articulo'=>array(
            'className'=>'Articulo'
        )
    );
}