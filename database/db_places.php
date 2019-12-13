<?php
    include_once('../includes/database.php');

    function getPlace( $id){

        //tenta ligar à base de dados
        try{
            $dbh = Database::instance()->db();

        }catch (Exception $e){
            echo $e->getMessage();
            return array();
        }

        //tenta fazer a query
        try{

            $stmt = $dbh->prepare('SELECT * FROM Moradia WHERE idMoradia = ?');
            $stmt ->execute(array($id));

        }catch (PDOException $e){
            echo $e->getMessage();
            return array();
        }
        
        return $stmt->fetch();
    }

    function getImagesPlaces($id){

         //tenta ligar à base de dados
        try{
            $dbh = Database::instance()->db();

        }catch (Exception $e){
            echo $e->getMessage();
            return array();
        }

        //tenta fazer a query
        try{

            $stmt = $dbh->prepare('SELECT caminho FROM ImagemMoradia WHERE idMoradia = ?');
            $stmt ->execute(array($id));

        }catch (PDOException $e){
            echo $e->getMessage();
            return array();
        }

        return $stmt->fetchAll();

    }


    function getComodidades($id){

        try{
            $dbh = Database::instance()->db();

        }catch (Exception $e){
            echo $e->getMessage();
            return array();
        }

        try{

            //verificar se query funciona
            $stmt = $dbh->prepare('SELECT C.tipo FROM Moradia M, MoradiaComodidade A, Comodidade C WHERE M.idMoradia=A.idMoradia AND A.idComodidade=C.idComodidade AND M.idMoradia= ?');
            $stmt ->execute(array($id));

        }catch (PDOException $e){
            echo $e->getMessage();
            return array();
        }

        return $stmt->fetchAll();

    }

    function get_places($location,$checkin=0,$checkout=0, $preco=1000000){

        try{
            $dbh = Database::instance()->db();

        }catch (Exception $e){
            echo $e->getMessage();
            return array();
        }

        try
        {
            if($checkin==0){
                $stmt = $dbh->prepare('SELECT * 
                                   FROM Moradia M
                                   WHERE M.localizacao = ?');
                                   
                $stmt ->execute(array($location));
                
            }else {
                
                $stmt = $dbh->prepare('SELECT * 
                                   FROM Moradia M
                                   WHERE M.localizacao = ? AND preco <= ? AND idMoradia NOT IN
                                            ( SELECT idMoradia FROM Reserva WHERE ( ? BETWEEN dataInicio AND dataFim) OR (? BETWEEN dataInicio AND dataFim)) GROUP BY idMoradia');
                      
                $stmt ->execute(array($location,$preco,$checkin,$checkout));
            }
            
            return $stmt->fetchAll();

        }catch (PDOException $e){
            echo $e->getMessage();
            return array();
        }

    }

    function check_dates($idM,$ci,$co){

        try{
            $dbh = Database::instance()->db();

        }catch (Exception $e){
            echo $e->getMessage();
            return array();
        }

        try
        {
           
                
            $stmt = $dbh->prepare('SELECT * 
                                FROM Moradia M
                                WHERE idMoradia IN
                                        ( SELECT idMoradia FROM Reserva WHERE ( ? BETWEEN dataInicio AND dataFim) OR (? BETWEEN dataInicio AND dataFim)) GROUP BY idMoradia');
                    
            $stmt ->execute(array($idM,$ci,$co));
            
            $result=$stmt->fetch();
            
            return empty($result);
            

        }catch (PDOException $e){
            echo $e->getMessage();
            return array();
        }

    }

?>