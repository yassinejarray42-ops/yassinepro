<table  border="1" >
      
      <tr>
    <td>N° d'ordre</td>
         <td>Titre de la piéce </td>
         <td>libellé de la salle </td>
         <td>date du spectacle</td>
      </tr>
      <?php
      $i=0;
    $cnx=mysqli_connect("localhost","root","","bdtp3");
    $req1=" SELECT p.titre , sa.libelle , s.datespectacle
FROM piece p ,salle sa ,spectacle s 
WHERE s.idpiece=p.idpies and sa.idsalle=s.idsalle
ORDER by s.datespectacle ";
    $res1=mysqli_query($cnx,$req1);
    while ($t=mysqli_fetch_array($res1)) {
        $i=$i+1;
        echo("
        
        <tr>
   
   <td>$i</td>
   <td>$t[0]</td>
   <td>$t[1]</td>
   <td>$t[2]</td>
   
   
   </tr>
   
   ");

    }
    mysqli_close($cnx);
    ?>
    </table>
