<?php
class Post_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'category_id = posts.category_id');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
	}

	//create post method in controller
	public function create_post($post_image){
		//get the slug into a variable from the title and format it as a url string
		$slug = strtolower(url_title($this->input->post('title')));

		//create a data map to store post details before inserting to the database
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id'),
			'post_image' => $post_image
		);

		return $this->db->insert('posts', $data);


	}

	public function delete_post($id){
		$this->db->where('id', $id);
		$this->db->delete('posts');
		return true;
	}

	public function update_post(){
		$slug = strtolower(url_title($this->input->post('title')));

		//create a data map to store post details before inserting to the database
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id')
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts', $data);
	}

	public function get_categories(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();

	}
}
