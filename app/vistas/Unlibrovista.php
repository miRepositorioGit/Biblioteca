<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <table border="1">
        <caption>Biblioteca por omisión.</caption>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
        </tr>
        <?php if (count($data) == 1): ?>
            <tr>
                <td><?php echo $data[0]['id']; ?></td>
                <td><?php echo $data[0]['titulo']; ?></td>
                <td><?php echo $data[0]['autor']; ?></td>
                <td><?php echo $data[0]['editorial']; ?></td>
            </tr>
        <?php else: ?>
            <?php foreach ($data as $libro): ?>
            <tr>
                <td><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['titulo']; ?></td>
                <td><?php echo $libro['autor']; ?></td>
                <td><?php echo $libro['editorial']; ?></td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
