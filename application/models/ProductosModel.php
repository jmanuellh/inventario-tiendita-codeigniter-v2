<?php
class ProductosModel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function obtenerProductos()
        {
                $query = $this->db->get('Productos');
                return $query->result();
        }

        public function aumentarCantidad()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
                $this->db->update('Productos', $object);


        }

        public function disminuirCantidad()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}