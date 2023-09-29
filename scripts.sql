create view v_anexo3
as
SELECT a3.*, e.RazonSocial,pe.nombres, pe.apellidos,mo.nombre as modulo 
FROM anexo_03 a3
INNER JOIN empresas e
ON a3.idEmpresa=e.id
INNER JOIN estudiantes es 
on a3.idEstudiante=es.id
INNER JOIN personas pe 
on es.id=pe.id
INNER JOIN modulos mo 
on mo.id=a3.idModulo

///////////////////////////////////

