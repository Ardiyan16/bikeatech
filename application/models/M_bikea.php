<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bikea extends CI_Model
{
    private $company = 'company';
    private $admin = 'admin';
    private $blog = 'blog';
    private $partner = 'partner';
    private $team = 'team';
    private $portfolio = 'portfolio';
    private $cateory = 'category_portfolio';
    private $detail_img = 'detail_img';
    private $tb_message = 'message';


    public function get_admin()
    {
        return $this->db->get_where($this->admin, ['role' => '2'])->result();
    }

    public function get_blog()
    {
        return $this->db->get($this->blog)->result();
    }

    public function get_blog2()
    {
        $this->db->limit(3);
        $this->db->order_by('id', 'desc');
        return $this->db->get($this->blog)->result();
    }

    public function get_partner()
    {
        return $this->db->get($this->partner)->result();
    }

    public function get_team()
    {
        return $this->db->get($this->team)->result();
    }

    public function get_category()
    {
        return $this->db->get($this->cateory)->result();
    }

    public function get_message()
    {
        return $this->db->get($this->tb_message)->result();
    }

    public function get_portfolio()
    {
        $this->db->select('portfolio.*, partner.name_partner, partner.images, category_portfolio.*');
        $this->db->from('portfolio');
        $this->db->join('partner', 'portfolio.id_partner = partner.id', 'left outer');
        $this->db->join('category_portfolio', 'portfolio.id_category = category_portfolio.id_cat', 'left outer');
        return $this->db->get()->result();
    }

    public function get_detailPortfolio($id)
    {
        $this->db->select('portfolio.*, partner.name_partner, partner.images, category_portfolio.*');
        $this->db->from('portfolio');
        $this->db->join('partner', 'portfolio.id_partner = partner.id', 'left outer');
        $this->db->join('category_portfolio', 'portfolio.id_category = category_portfolio.id_cat', 'left outer');
        $this->db->where('portfolio.id', $id);
        return $this->db->get()->row();
    }

    public function get_images()
    {
        $this->db->select('detail_img.*, portfolio.title');
        $this->db->from('detail_img');
        $this->db->join('portfolio', 'detail_img.id_portfolio = portfolio.id');
        return $this->db->get()->result();
    }

    public function count_partner()
    {
        return $this->db->count_all_results($this->partner);
    }

    public function count_portfolio()
    {
        return $this->db->count_all_results($this->portfolio);
    }

    public function count_team()
    {
        return $this->db->count_all_results($this->team);
    }

    public function update_company()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->name = $post['name'];
        $this->ceo = $post['ceo'];
        $this->address = $post['address'];
        $this->no_telp = $post['no_telp'];
        $this->instagram = $post['instagram'];
        $this->facebook = $post['facebook'];
        $this->twitter = $post['twitter'];
        $this->db->update($this->company, $this, ['id' => $post['id']]);
    }

    public function save_admin()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->role = 2;
        $this->status = 1;
        $this->db->insert($this->admin, $this);
    }

    public function update_admin()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->db->update($this->admin, $this, ['id' => $post['id']]);
    }

    public function save_blog()
    {
        $post = $this->input->post();
        $this->title = $post['title'];
        $this->date_blog = $post['date_blog'];
        $this->category = $post['category'];
        $this->tag = $post['tag'];
        $this->description = $post['description'];
        $this->images = $this->upload_imagesBlog();
        $this->writer = $post['writer'];
        $this->db->insert($this->blog, $this);
    }

    public function update_blog()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->title = $post['title'];
        $this->date_blog = $post['date_blog'];
        $this->category = $post['category'];
        $this->tag = $post['tag'];
        $this->description = $post['description'];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->upload_imagesBlog();
        } else {
            $this->images = $post["old_images"];
        }
        $this->writer = $post['writer'];
        $this->db->update($this->blog, $this, ['id' => $post['id']]);
    }

    public function upload_imagesBlog()
    {
        $config['upload_path']          = './assets/img/images_blog/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['images']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function save_partner()
    {
        $post = $this->input->post();
        $this->name_partner = $post['name_partner'];
        $this->address = $post['address'];
        $this->images = $this->upload_imagesPartner();
        $this->db->insert($this->partner, $this);
    }

    public function update_partner()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->name_partner = $post['name_partner'];
        $this->address = $post['address'];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->upload_imagesPartner();
        } else {
            $this->images = $post["old_images"];
        }
        $this->db->update($this->partner, $this, ['id' => $post['id']]);
    }

    private function upload_imagesPartner()
    {
        $config['upload_path']          = './assets/img/images_partner/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['images']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function save_team()
    {
        $post = $this->input->post();
        $this->name = $post['name'];
        $this->position = $post['position'];
        $this->age = $post['age'];
        $this->description = $post['description'];
        $this->skill = $post['skill'];
        $this->picture = $this->upload_pictureTeam();
        $this->db->insert($this->team, $this);
    }

    public function update_team()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->name = $post['name'];
        $this->position = $post['position'];
        $this->age = $post['age'];
        $this->description = $post['description'];
        $this->skill = $post['skill'];
        if (!empty($_FILES["picture"]["name"])) {
            $this->picture = $this->upload_pictureTeam();
        } else {
            $this->picture = $post["old_picture"];
        }
        $this->db->update($this->team, $this, ['id' => $post['id']]);
    }

    private function upload_pictureTeam()
    {
        $config['upload_path']          = './assets/img/images_team/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['picture']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function save_portfolio()
    {
        $post = $this->input->post();
        $this->title = $post['title'];
        $this->date = $post['date'];
        $this->id_category = $post['id_category'];
        $this->description = $post['description'];
        $this->id_partner = $post['id_partner'];
        $this->picture = $this->upload_picturePortfolio();
        $this->db->insert($this->portfolio, $this);
    }

    public function update_portfolio()
    {
        $post = $this->input->post();
        $this->id = $post['portfolio'];
        $this->title = $post['title'];
        $this->date = $post['date'];
        $this->id_category = $post['id_category'];
        $this->description = $post['description'];
        $this->id_partner = $post['id_partner'];
        if (!empty($_FILES["picture"]["name"])) {
            $this->picture = $this->upload_picturePortfolio();
        } else {
            $this->picture = $post["old_picture"];
        }
        $this->db->update($this->portfolio, $this, ['id' => $post['id']]);
    }

    private function upload_picturePortfolio()
    {
        $config['upload_path']          = './assets/img/images_portfolio/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['picture']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function save_images()
    {
        $post = $this->input->post();
        $this->id_portfolio = $post['id_portfolio'];
        $this->images = $this->upload_imagesDetail();
        $this->db->insert($this->detail_img, $this);
    }

    public function update_images()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->id_portfolio = $post['id_portfolio'];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->upload_imagesDetail();
        } else {
            $this->images = $post["old_images"];
        }
        $this->db->update($this->detail_img, $this, ['id' => $post['id']]);
    }

    private function upload_imagesDetail()
    {
        $config['upload_path']          = './assets/img/images_detail/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['images']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function save_message()
    {
        $post = $this->input->post();
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];
        $this->subject = $post['subject'];
        $this->message = $post['message'];
        $this->db->insert($this->tb_message, $this);
    }
}
