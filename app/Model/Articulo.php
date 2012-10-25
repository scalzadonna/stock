class Articulo extends AppModel {
    
    var $name = 'Articulo';
   
    // Relationships
    var $belongsTo = array(
        'Proveedor'=>array(
            'className'=>'Proveedor'
        ),
        'Categoria'=>array(
            'className'=>'Categoria'
        ),
		'Rubro'=>array(
            'className'=>'Rubro'
        ),
		'Fabricante'=>array(
            'className'=>'Fabricante'
        ),
        'Ubicacion'=>array(
            'className'=>'Ubicacion'
        )
    );
   
    // many to many relationship
    var $hasMany = array(
        'Item'=>array(
            'className'=>'Item'
        )
    );
}