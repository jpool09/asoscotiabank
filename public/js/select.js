var areas = [
    {id:"Asociado",name:"Asociado"},
    {id:"Área Financiera",name:"Área Financiera"},
    {id:"Área Administrativa",name:"Área Administrativa"},
    {id:"Área Negocios",name:"Área Negocios"}
]

var categorias = [
    {id:"Información General",name:"Información General",idArea:"Asociado"},
    {id:"Información Crediticia",name:"Información Crediticia",idArea:"Asociado"},
    {id:"Subsidios",name:"Subsidios",idArea:"Asociado"},
    {id:"Pólizas",name:"Pólizas",idArea:"Asociado"},
    {id:"Garantías",name:"Garantías",idArea:"Asociado"},
    {id:"Contabilidad",name:"Contabilidad",idArea:"Área Financiera"},
    {id:"Pólizas Asociacion",name:"Pólizas Asociacion",idArea:"Área Financiera"},
    {id:"Cargas en lote",name:"Cargas en lote",idArea:"Área Financiera"},
    {id:"Actas",name:"Actas",idArea:"Área Administrativa"},
    {id:"Junta Directiva",name:"Junta Directiva",idArea:"Área Administrativa"},
    {id:"Manual de Procedimientos",name:"Manual de Procedimientos",idArea:"Área Administrativa"},
    {id:"Ministerio de trabajo",name:"Ministerio de trabajo",idArea:"Área Administrativa"},
    {id:"Recursos Humanos",name:"Recursos Humanos",idArea:"Área Administrativa"},
    {id:"Proyectos",name:"Proyectos",idArea:"Área Negocios"},
    {id:"Convenios",name:"Convenios",idArea:"Área Negocios"},
    {id:"Mercadeo y Ventas",name:"Mercadeo y Ventas",idArea:"Área Negocios"},
]

var subCategorias = [
    {id:"Cédula",name:"Cédula",idCategoria:"Información General"},
    {id:"Formulario de afiliación",name:"Formulario de afiliación",idCategoria:"Información General"},
    {id:"Boletas de ahorro",name:"Boletas de ahorro",idCategoria:"Información General"},
    {id:"Renuncia interna",name:"Renuncia interna",idCategoria:"Información General"},
    {id:"Liquidación Ex Empleado",name:"Liquidacion Ex Empleado",idCategoria:"Información General"},
    {id:"Lista de correos para envios masivos",name:"Lista de correos para envios masivos",idCategoria:"Información General"},
    {id:"Sobre Ahorro",name:"Sobre Ahorro",idCategoria:"Información Crediticia"},
    {id:"Consumo",name:"Consumo",idCategoria:"Información Crediticia"},
    {id:"Fianza",name:"Fianza",idCategoria:"Información Crediticia"},
    {id:"Prendas",name:"Prendas",idCategoria:"Información Crediticia"},
    {id:"Hipotecas",name:"Hipotecas",idCategoria:"Información Crediticia"},
    {id:"Ex Empleados con deuda",name:"Ex Empleados con deuda",idCategoria:"Información Crediticia"},
    {id:"Excepciones de crédito",name:"Excepciones de crédito",idCategoria:"Información Crediticia"},
    {id:"Restricciones de crédito",name:"Restricciones de crédito",idCategoria:"Información Crediticia"},
    {id:"Matrimonio",name:"Matrimonio",idCategoria:"Subsidios",},
    {id:"Defunción",name:"Defunción",idCategoria:"Subsidios",},
    {id:"Nacimiento",name:"Nacimiento",idCategoria:"Subsidios",},
    {id:"Otros subsidios",name:"Otros subsidios",idCategoria:"Subsidios",},
    {id:"Activos",name:"Activos",idCategoria:"Pólizas"},
    {id:"Inactivos",name:"Inactivos",idCategoria:"Pólizas"},
    {id:"Pagaré",name:"Pagaré",idCategoria:"Garantías"},
    {id:"Hipoteca",name:"Hipoteca",idCategoria:"Garantías"},
    {id:"Prenda",name:"Prenda",idCategoria:"Garantías"},
    {id:"Otras garantías",name:"Otras garantías",idCategoria:"Garantías"},
    {id:"Cheques",name:"Cheques",idCategoria:"Contabilidad"},
    {id:"Transferencias",name:"Transferencias",idCategoria:"Contabilidad"},
    {id:"Asientos",name:"Asientos",idCategoria:"Contabilidad"},
    {id:"Arqueos",name:"Arqueos",idCategoria:"Contabilidad"},
    {id:"Conciliaciones",name:"Conciliaciones",idCategoria:"Contabilidad"},
    {id:"Estados financieros",name:"Estados financieros",idCategoria:"Contabilidad"},
    {id:"Auxiliares",name:"Auxiliares",idCategoria:"Contabilidad"},
    {id:"Recibos de dinero",name:"Recibos de dinero",idCategoria:"Contabilidad"},
    {id:"Colectiva de vida",name:"Colectiva de vida",idCategoria:"Pólizas Asociacion"},
    {id:"Desempleo",name:"Desempleo",idCategoria:"Pólizas Asociacion"},
    {id:"Saldos deudores",name:"Saldos deudores",idCategoria:"Pólizas Asociacion"},
    {id:"Tienda Chayfer",name:"Tienda Chayfer",idCategoria:"Cargas en lote"},
    {id:"Odontología",name:"Odontología",idCategoria:"Cargas en lote"},
    {id:"Ferias",name:"Ferias",idCategoria:"Cargas en lote"},
    {id:"Otras cargas",name:"Otras cargas",idCategoria:"Cargas en lote"},
    {id:"Actas juntas directiva",name:"Actas juntas directiva",idCategoria:"Actas"},
    {id:"Actas Asamblea",name:"Actas Asamblea",idCategoria:"Actas"},
    {id:"Actas Comités",name:"Actas Comités",idCategoria:"Actas"},
    {id:"Otras actas",name:"Otras actas",idCategoria:"Actas"},
    {id:"Informes",name:"Informes",idCategoria:"Junta Directiva"},
    {id:"Reportes mensuales",name:"Reportes mensuales",idCategoria:"Junta Directiva"},
    {id:"Información miembros junta directiva",name:"Información miembros junta directiva",idCategoria:"Junta Directiva"},
    {id:"Reglamentos",name:"Reglamentos",idCategoria:"Manual de Procedimientos"},
    {id:"Procedimientos",name:"Procedimientos",idCategoria:"Manual de Procedimientos"},
    {id:"Manuales",name:"Manuales",idCategoria:"Manual de Procedimientos"},
    {id:"Otros manuales",name:"Otros manuales",idCategoria:"Manual de Procedimientos"},
    {id:"Estatutos",name:"Estatutos",idCategoria:"Ministerio de trabajo"},
    {id:"Personerias",name:"Personerias",idCategoria:"Ministerio de trabajo"},
    {id:"Inscripción actas",name:"Inscripción actas",idCategoria:"Ministerio de trabajo"},
    {id:"Otros trámites ministerio de trabajo",name:"Otros trámites ministerio de trabajo",idCategoria:"Ministerio de trabajo"},
    {id:"Currículos",name:"Currículos",idCategoria:"Recursos Humanos"},
    {id:"Control de vacaciones y pods",name:"Control de vacaciones y pods",idCategoria:"Recursos Humanos"},
    {id:"Aumentos salariales",name:"Aumentos salariales",idCategoria:"Recursos Humanos"},
    {id:"Evaluaciones de personal",name:"Evaluaciones de personal",idCategoria:"Recursos Humanos"},
    {id:"Amonestaciones de personal",name:"Amonestaciones de personal",idCategoria:"Recursos Humanos"},
    {id:"Contratos laborales",name:"Contratos laborales",idCategoria:"Recursos Humanos"},
    {id:"Bonificaciones de personal",name:"Bonificaciones de personal",idCategoria:"Recursos Humanos"},
    {id:"Otros administrativo",name:"Otros administrativo",idCategoria:"Recursos Humanos"},
    {id:"Guardería",name:"Guardería",idCategoria:"Proyectos"},
    {id:"Centro de acondicionamiento",name:"Centro de acondicionamiento",idCategoria:"Proyectos"},
    {id:"Pulpería",name:"Pulpería",idCategoria:"Proyectos"},
    {id:"Tienda",name:"Tienda",idCategoria:"Proyectos"},
    {id:"Odontología",name:"Odontología",idCategoria:"Proyectos"},
    {id:"Estudios de mercado",name:"Estudios de mercado",idCategoria:"Proyectos"},
    {id:"Consumo",name:"Consumo",idCategoria:"Convenios"},
    {id:"Salud",name:"Salud",idCategoria:"Convenios"},
    {id:"Automotriz",name:"Automotriz",idCategoria:"Convenios"},
    {id:"Cuidado personal",name:"Cuidado personal",idCategoria:"Convenios"},
    {id:"Técnologia",name:"Técnologia",idCategoria:"Convenios"},
    {id:"Línea blanca",name:"Línea blanca",idCategoria:"Convenios"},
    {id:"Joyeria y relojeria",name:"Joyeria y relojeria",idCategoria:"Convenios"},
    {id:"Servicios",name:"Servicios",idCategoria:"Convenios"},
    {id:"Turismo",name:"Turismo",idCategoria:"Convenios"},
    {id:"Otros convenios",name:"Otros convenios",idCategoria:"Convenios"},
    {id:"Contactos importantes",name:"Contactos importantes",idCategoria:"Convenios"},
    {id:"Ficha personal de proveedores",name:"Ficha personal de proveedores",idCategoria:"Mercadeo y Ventas"},
]
  
  //creando los options de area
  var areasSelect = document.getElementById('area');
  var categoriasSelect = document.getElementById('category');
  var subCategoriasSelect = document.getElementById('subcategory');
  
  areasSelect.addEventListener("change", cargarCategorias);
  categoriasSelect.addEventListener("change", cargarSubCategorias); 
  
  areas.forEach(function(area){
    let opcion = document.createElement('option')
    opcion.value = area.id
    opcion.text = area.name
    areasSelect.add(opcion)
  })
  
  function cargarCategorias(){
    categoriasSelect.options.length = 1;
    subCategoriasSelect.options.length = 1;
    categorias
    .filter(function (categoria){
        return categoria.idArea == this;
    }, areasSelect.value)
    .forEach(function(categoria){
      let opcion = document.createElement('option')
      opcion.value = categoria.id
      opcion.text = categoria.name
      categoriasSelect.add(opcion);
    });
  }
  
  function cargarSubCategorias(){
     subCategoriasSelect.options.length = 1;
     subCategorias
    .filter(function (subCategoria){
        return subCategoria.idCategoria == this;
    }, categoriasSelect.value)
    .forEach(function(subCategoria){
      let opcion = document.createElement('option')
      opcion.value = subCategoria.id
      opcion.text = subCategoria.name
      subCategoriasSelect.add(opcion);
    });
  }
