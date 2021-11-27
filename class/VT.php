<?php
class VT
{
    var $sunucu = "localhost";
    var $user = "root";
    var $password = "";
    var $dbname = "yonetimpaneli";
    var $baglanti;
    function __construct()
    {
        try {
            $this->baglanti = new PDO("mysql:host=" . $this->sunucu . ";dbname=" . $this->dbname . "; charset=utf8", $this->user, $this->password);
        } catch (PDOException $error) {
            echo $error->getMessage();
            exit();
        }
    }
    /*
@param mixed $tablo asdasdasd
*/
    public function get($tablo, $whereAlan = "", $whereDeger = "", $orderBy = "ORDER BY id ASC", $limit = "")
    {
        $this->baglanti->query("SET CHARACTER SET utf8");
        $sql = "Select * from " . $tablo; /*Select * from Tabloadı*/

        if (!empty($whereAlan) && !empty($whereDeger)) {
            $sql .= " " . $whereAlan;/*Select * from Tabloadı where */
            if (!empty($orderBy)) {
                $sql .= " " . $orderBy;/*Select * from Tabloadı where tabloadı=1 orderby desc */
            }
            if (!empty($limit)) {
                $sql .= " LIMIT" . $limit;/*Select * from Tabloadı where tabloadı=1 LIMIT 1 */
            }
            $calistir = $this->baglanti->prepare($sql);
            $sonuc = $calistir->execute($whereDeger);
            $veri = $calistir->fetchAll(PDO::FETCH_ASSOC);
        } else {
            if (!empty($orderBy)) {
                $sql .= " " . $orderBy;/*Select * from Tabloadı where tabloadı=1 orderby desc */
            }
            if (!empty($limit)) {
                $sql .= " LIMIT" . $limit;/*Select * from Tabloadı where tabloadı=1 LIMIT 1 */
            }
            $veri = $this->baglanti->query($sql, PDO::FETCH_ASSOC);
        }
        if (!empty($veri) && $veri != false) {
            $data = array();
            foreach ($veri as $bilgi) {
                $data[] = $bilgi;
            }
            return $data;
        } else {
            return false;
        }
    }
}
?>