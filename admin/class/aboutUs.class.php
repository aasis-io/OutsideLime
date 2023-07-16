<?php

abstract class aboutClass
{
    // abstract function save();
    abstract function retrieve();
    abstract function edit();

    public function set($key, $value)
    {
        $this->$key = $this->validate($value);
    }

    public function validate($value)
    {
        $val = htmlspecialchars($value);
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $newValue = $conn->real_escape_string($val);
        return $newValue;
    }

    public function select($sql)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $var = $conn->query($sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
}


class aboutUs extends aboutClass
{
    public $about_us, $title, $meta_title, $meta_key, $meta_desc, $about_id;

    // public function save()
    // {
    //     $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
    //     $sql = "insert into 
    //            aboutus(about_us, title, meta_title, meta_key, meta_desc) values('$this->about_us',
    //              '$this->title',
    //             '$this->meta_title', '$this->meta_key', '$this->meta_desc')";

    //     $conn->query($sql);
    //     if ($conn->affected_rows == 1 && $conn->insert_id > 0) {
    //         return $conn->insert_id;
    //     } else {
    //         return false;
    //     }
    // }
    public function retrieve()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "select * from aboutus";
        $var = $conn->query($sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function edit()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "update aboutus set title='$this->title',
                                    meta_key='$this->meta_key',
                                    about_us='$this->about_us',
                                    meta_title='$this->meta_title',
                                    meta_desc='$this->meta_desc'
                                    where about_id=1";
        $conn->query($sql);
        if ($conn->affected_rows == 1) {
            return 1;
        } else {
            return false;
        }
    }


    public function getAboutUs()
    {
        $sql = "select * from aboutus limit 1";
        return $this->select($sql);
    }

    public function getById()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
        $sql = "select * from aboutus where about_id=1";
        $var = $conn->query($sql);

        if ($var->num_rows > 0) {
            $data = $var->fetch_object();
            return $data;
        } else {
            return [];
        }
    }
}
