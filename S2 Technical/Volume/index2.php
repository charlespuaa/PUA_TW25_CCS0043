<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUA | Volume of Shapes</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <h1>Volume of Shapes</h1> <br><br>
    <?php
    define('PI', M_PI);

    // Function for Cube Volume
    function computeCubeVolume($side) {
        return pow($side, 3);
    }
    // Function for Right Rectangular Prism Volume
    function computeRectangularPrismVolume($length, $width, $height) {
        return $length * $width * $height;
    }

    // Function for Cylinder Volume 
    function computeCylinderVolume($radius, $height) {
        return PI * pow($radius, 2) * $height;
    }
    // Function for Pyramid or Cone Volume
    function computePyramidConeVolume($baseArea, $height) {
        return (1/3) * $baseArea * $height;
    }

    // Function for Sphere Volume
    function computeSphereVolume($radius) {
        return (4/3) * PI * pow($radius, 3);
    }

    // Cube
    $cube_s = 15;
    $cube_volume = computeCubeVolume($cube_s);

    // Right Rectangular Prism
    $prism_l = 10;
    $prism_w = 6;
    $prism_h = 7;
    $prism_volume = computeRectangularPrismVolume($prism_l, $prism_w, $prism_h);

    // Cylinder
    $cylinder_r = 5;
    $cylinder_h = 10;
    $cylinder_volume = computeCylinderVolume(radius: $cylinder_r, height: $cylinder_h);

    // Pyramid 
    $pyramid_base_side = 5;
    $pyramid_base_area = pow($pyramid_base_side, 2);
    $pyramid_h = 8;
    $pyramid_volume = computePyramidConeVolume($pyramid_base_area, $pyramid_h);

    // Sphere
    $sphere_r = 10;
    $sphere_volume = computeSphereVolume($sphere_r);
    ?>

    <table class="volumeTable">
        <thead>
            <tr>
                <th class="tableHeaderCell">Shape</th>
                <th class="tableHeaderCell">Values</th>
                <th class="tableHeaderCell">Formula</th>
                <th class="tableHeaderCell">Answer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cube</td>
                <td>s = <?php echo $cube_s; ?></td>
                <td>V = s<sup>3</sup></td>
                <td class="resultCell"><?php echo round($cube_volume, 2); ?></td>
            </tr>
            <tr>
                <td>Right Rectangular Prism</td>
                <td>l = <?php echo $prism_l; ?>, w = <?php echo $prism_w; ?>, h = <?php echo $prism_h; ?></td>
                <td>V = lwh</td>
                <td class="resultCell"><?php echo round($prism_volume, 2); ?></td>
            </tr>
            <tr>
                <td>Cylinder</td>
                <td>r = <?php echo $cylinder_r; ?>, h = <?php echo $cylinder_h; ?></td>
                <td>V = &pi;r<sup>2</sup>h</td>
                <td class="resultCell"><?php echo round($cylinder_volume, 2); ?></td>
            </tr>
            <tr>
                <td>Pyramid/Cone</td>
                <td>Base Side = <?php echo $pyramid_base_side; ?>, h = <?php echo $pyramid_h; ?></td>
                <td>V = (1/3)Bh</td>
                <td class="resultCell"><?php echo round($pyramid_volume, 2); ?></td>
            </tr>
            <tr>
                <td>Sphere</td>
                <td>r = <?php echo $sphere_r; ?></td>
                <td>V = (4/3)&pi;r<sup>3</sup></td>
                <td class="resultCell"><?php echo round($sphere_volume, 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
