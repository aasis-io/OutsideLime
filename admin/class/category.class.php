<?php

require_once('common.class.php');

class Category extends Common
{
    public $id, $name, $status, $parent_id, $created_date;

    public function save()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');




        $sql = "insert into 
            category(name, status, parent_id, created_date) values('$this->name', '$this->status', '$this->parent_id', '$this->created_date')";
        $conn->query($sql);

        if ($conn->affected_rows == 1 && $conn->insert_id > 0) {
            return $conn->insert_id;
        } else {
            return false;
        }
    }
    public function retrieve()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "select * from category";
        $var = $conn->query($sql);
        $categoryRes = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $categoryRes;
        } else {
            return false;
        }
    }
    public function edit()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "update category set name='$this->name',
                                    status='$this->status'
                                    parent_id='$this->parent_id'
                                    where id='$this->id'";
        $conn->query($sql);
        if ($conn->affected_rows == 1) {
            return $this->id;
        } else {
            return false;
        }
    }
    public function delete()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "delete from category where id='$this->id'";
        $var = $conn->query($sql);
        if ($var) {
            return "success";
        } else {
            return "failed";
        }
    }

    public function getById()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "select * from category where id='$this->id'";
        $var = $conn->query($sql);
        if ($var->num_rows > 0) {
            $data = $var->fetch_object();
            return $data;
        } else {
            return [];
        }
    }

    // public function getCategoryNepal()
    // {
    //     $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
    //     $sql = "select * from category where parent_id=2";
    //     $var = $conn->query($sql);
    //     if ($var->num_rows > 0) {
    //         $data = $var->fetch_object();
    //         return $data;
    //     } else {
    //         return [];
    //     }
    // }

    // public function getAllActiveCategory()
    // {
    //     $sql = "select * from category where status=1";
    //     return $this->select($sql);
    // }
    public function getCategoryNepal()
    {
        $sql = "select * from category where parent_id=2";
        return $this->select($sql);
    }
}
