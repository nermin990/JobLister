<?php
    class Job{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Get all jobs
        public function getAllJobs(){
            $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs
                             INNER JOIN categories ON jobs.category_id = categories.id
                             ORDER BY post_date DESC");

            // Assing Result set
            $result = $this->db->resultSet();

            return $result;
        }

        // Get Categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");

            // Assing Result set
            $result = $this->db->resultSet();

            return $result;
        }

        // Get job by category
        public function getByCategory($category){
            $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs
                             INNER JOIN categories ON jobs.category_id = categories.id
                             WHERE jobs.category_id = $category
                             ORDER BY post_date DESC");

            // Assing Result set
            $result = $this->db->resultSet();

            return $result;
        }

        // Get category
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = $category_id");

            $this->db->bind(':category_id', $category_id);

            // Assing row
            $row = $this->db->single();
            return $row;
        }

        // Get Job
        public function getJob($id){
            $this->db->query("SELECT * FROM jobs WHERE id = $id");

            $this->db->bind(':id', $id);

            // Assing row
            $row = $this->db->single();
            return $row;
        }

        // Create Job
        public function create($data){
            // Insert Query
            $this->db->query("INSERT INTO jobs 
            (category_id, job_title, company, description, location, salary, contact_user, contact_email)
                              VALUES 
            (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
            // Bind data
            $this->db->bind(":category_id", $data['category_id']);
            $this->db->bind(":job_title", $data['job_title']);
            $this->db->bind(":company", $data['company']);
            $this->db->bind(":description", $data['description']);
            $this->db->bind(":location", $data['location']);
            $this->db->bind(":salary", $data['salary']);
            $this->db->bind(":contact_user", $data['contact_user']);
            $this->db->bind(":contact_email", $data['contact_email']);
            
            // Execute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }

        // Delete Job
        public function delete($id){
            // Insert Query
            $this->db->query("DELETE FROM jobs WHERE id = $id");
            
            // Execute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }

        // Update Job
        public function update($id, $data){
            // Insert Query
            $this->db->query("UPDATE jobs SET
            category_id = :category_id, job_title = :job_title, company = :company, description = :description,
            location = :location, salary = :salary, contact_user = :contact_user, contact_email = :contact_email
            WHERE id = $id");
            // Bind data
            $this->db->bind(":category_id", $data['category_id']);
            $this->db->bind(":job_title", $data['job_title']);
            $this->db->bind(":company", $data['company']);
            $this->db->bind(":description", $data['description']);
            $this->db->bind(":location", $data['location']);
            $this->db->bind(":salary", $data['salary']);
            $this->db->bind(":contact_user", $data['contact_user']);
            $this->db->bind(":contact_email", $data['contact_email']);
            
            // Execute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }
    }