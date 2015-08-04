<?php 
require 'parks_config.php';
require 'db_connect.php';


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$truncstmt=$dbc->prepare('TRUNCATE national_parks');
$truncstmt->execute();
$parks = [
    ['name'=> 'Acadia', 
    'location'=> 'Maine', 
    'date_established'=>'1919-02-26', 
    'area_in_acres'=>47389.67,
    'description'=>'Covering most of Mount Desert Island and other coastal islands, 
    Acadia features the tallest mountain on the Atlantic coast of the United States, 
    granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, 
    forest, and intertidal habitats.'],
    ['name'=> 'Arches',
     'location'=>'Utah',
     'date_established'=> '1929-04-12', 
     'area_in_acres'=>76518.98,
     'description'=>'This site features more than 2,000 natural sandstone arches,
      including the famous Delicate Arch. In a desert climate, millions of years 
      of erosion have led to these structures, and the arid ground has life-sustaining
      soil crust and potholes, which serve as natural water-collecting basins. Other 
      geologic formations are stone columns, spires, fins, and towers.'],
    ['name'=>'Bad Lands',
     'location'=>'South Dakota',
     'date_established'=>'1978-11-10',
     'area_in_acres'=> 242755.94,
     'description'=>'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies.
      It has the world\'s richest fossil beds from the Oligocene epoch, and the wildlife includes bison, 
      bighorn sheep, black-footed ferrets, and swift foxes.'],
    ['name'=>'Big Bend',
     'location'=> 'Texas',
     'date_established'=> '1944-06-12',
     'area_in_acres'=>801163.21,
     'description'=>'Named for the prominent bend in the Rio Grande along the US–Mexico border, 
     this park encompasses a large and remote part of the Chihuahuan Desert. Its main
      attraction is backcountry recreation in the arid Chisos Mountains and in canyons along 
      the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural 
      artifacts of Native Americans also exist within its borders.'],
    ['name'=>'Crater Lake',
     'location'=> 'Oregon',
     'date_established'=>'1902-05-22',
     'area_in_acres'=>183244.05,
     'description'=>'Crater Lake lies in the caldera of an ancient volcano 
     called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake
      in the United States and is famous for its vivid blue color and water clarity.
       There are two more recent volcanic islands in the lake, and, with no inlets 
       or outlets, all water comes through precipitation.'],
    ['name'=>'Denali',
     'location'=>'Alaska',
     'date_established'=>'1917-02-26',
     'area_in_acres'=>4740911.72,
     'description'=>'Centered around Mount McKinley, the tallest mountain in 
     North America, Denali is serviced by a single road leading to Wonder Lake. 
     McKinley and other peaks of the Alaska Range are covered with long glaciers
      and boreal forest. Wildlife includes grizzly bears, Dall sheep, caribou, and gray wolves.'],
    ['name'=>'Everglades',
     'location'=>'Florida',
     'date_established'=>'1934-05-30',
     'area_in_acres'=>1508537.90,
     'description'=>'The Everglades are the largest subtropical wilderness in the 
     United States. This mangrove ecosystem and marine estuary is home to 36 
     protected species, including the Florida panther, American crocodile, 
     and West Indian manatee. Some areas have been drained and developed;
      restoration projects aim to restore the ecology.'],
    ['name'=>'Glacier',
     'location'=>'Montana',
     'date_established'=>'1910-05-11',
     'area_in_acres'=>1013572.41,
     'description'=>'The U.S. half of Waterton-Glacier International 
     Peace Park, this park hosts 26 glaciers and 130 named lakes beneath 
     a stunning canopy of Rocky Mountain peaks. There are historic hotels 
     and a landmark road in this region of rapidly receding glaciers.
      The local mountains, formed by an overthrust, expose the world\'s
       best-preserved sedimentary fossils from the Proterozoic era.'],
    ['name'=>'Hot Springs',
     'location'=>'Arkansas',
     'date_established'=>'1921-03-04',
     'area_in_acres'=>5549.75,
     'description'=>'Hot Springs was established by act of 
     congress as a federal reserve on April 20, 1832, as
     such it is the oldest park managed by the National 
     Park System. Congress changed the reserve\'s designation
     to National Park on March 4, 1921 after the National Park
     Service was established in 1916. Hot Springs is the smallest 
     and only National Park in an urban area and is based   
     around natural hot springs that have been managed by the 
     federal government since the 1830s. The springs provide opportunities
     for relaxation in an historic setting; Bathhouse Row preserves numerous
     examples of 19th-century architecture.'],
    ['name'=>'Katmai',
     'location'=>'Alaska',
     'date_established'=>'1980-12-02',
     'area_in_acres'=>3674529.68,
     'description'=>'This park on the Alaska Peninsula protects 
     the Valley of Ten Thousand Smokes, an ash flow formed by the
     1912 eruption of Novarupta, as well as Mount Katmai. Over 2,000 
     grizzly bears come here each year to catch spawning salmon.
     Other wildlife includes caribou, wolves, moose, and wolverines.']
    ];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
                        VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park){
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    
    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
    


