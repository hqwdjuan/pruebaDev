<h1>Estudiantes List</h1>

<table>
  <thead>
    <tr>
      <th>Id estudiante</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Interesado</th>
      <th>Contactado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estudiantes as $estudiante): ?>
    <tr>
      <td><a href="<?php echo url_for('registro/show?id_estudiante='.$estudiante->getIdEstudiante()) ?>"><?php echo $estudiante->getIdEstudiante() ?></a></td>
      <td><?php echo $estudiante->getNombres() ?></td>
      <td><?php echo $estudiante->getApellidos() ?></td>
      <td><?php echo $estudiante->getEmail() ?></td>
      <td><?php echo $estudiante->getTelefono() ?></td>
      <td><?php echo $estudiante->getInteresado() ?></td>
      <td><?php echo $estudiante->getContactado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('registro/new') ?>">New</a>
