<?php

class Posts extends CI_Controller{
	public function index(){
		$data['title'] = 'Latest Posts';
		$data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL){
		$data['posts'] = $this->post_model->get_posts($slug);
		if(empty($data['posts'])){
			show_404();
		}

		$data['title'] = $data['posts']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Create Posts';
		$data['categories'] = $this->post_model->get_categories();

		//setting validation rules for the create post page
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} else {
			//Upload the image
				//1. Set the Path
			$config['upload_path'] = './assets/images/posts';
				//2. Set the configs
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '500';
			$config['max_height'] = '500';
				//3. Load the libraries
			$this->load->library('upload', $config);
				//4. Check
			if(!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			} else {
				//5. Store in folder and database
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->post_model->create_post($post_image);
			redirect('posts');
		}
	}

	public function delete($id){
		$this->post_model->delete_post($id);
		redirect('posts');
	}

	public function edit($slug){
		$data['posts'] = $this->post_model->get_posts($slug);
		if(empty($data['posts'])){
			show_404();
		}

		$data['title'] = 'Edit Posts';

		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$this->post_model->update_post();
		redirect('posts');
	}
}
