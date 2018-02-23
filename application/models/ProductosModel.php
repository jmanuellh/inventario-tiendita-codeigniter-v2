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

        public function obtenerCantidad($id){
                $query = $this->db->get_where('Productos', array('id' => $id));

                //return 0;

                return $query->result()[0]->Cantidad;
        }

        public function actualizarCantidad($id,$cantidad)
        {
                /*
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);

                */

                $data = array(
                        'Cantidad' => $cantidad
                );
                
                $this->db->where('Id', $id);
                $this->db->update('Productos', $data);


        }

        

}