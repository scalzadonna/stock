class Rubro extends AppModel {
    
    var $name = 'Rubro';
   
   
    // many to many relationship
    var $hasMany = array(
        'Articulo'=>array(
            'className'=>'Articulo'
        )
    );
}