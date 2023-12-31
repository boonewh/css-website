<?php
class Pages extends CI_Controller {

        private $homeData = [
                'title' => "Center for Social Success || Dallas, Tx.",
                'description' => "Let us help you in all of your social interactions. Family, individual and group therapy including animal assisted services",
                'css' => "assets/css/main.css"
        ];

        private $servicesData = [
                'title' => "CSS Services Page",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'css' => "assets/css/main.css",
        ];

        private $staffData = [
                'title' => "Meet Our Professionals",
                'description' => "CSS Proffesionals, specializing in a wide variety of services to help you every day.",
                'css' => "assets/css/main.css",
        ];

        private $pupsData = [
                'title' => "CSS Services Page",
                'description' => "The services that CSS provide. Adult Services; Child, Teen, Family Services; Animal Assisted Services; Social Skills Groups.",
                'css' => "assets/css/main.css",
        ];

        private $newsletterData = [
                'title' => "CSS Services Page",
                'description' => "The services that CSS provide. Adult Services; Child, Teen, Family Services; Animal Assisted Services; Social Skills Groups.",
                'css' => "assets/css/main.css",
        ];

        private $locationData = [
                'title' => "CSS Services Page",
                'description' => "The services that CSS provide. Adult Services; Child, Teen, Family Services; Animal Assisted Services; Social Skills Groups.",
                'css' => "assets/css/main.css",
        ];

        private $contactData = [
                'title' => "CSS Services Page",
                'description' => "The services that CSS provide. Adult Services; Child, Teen, Family Services; Animal Assisted Services; Social Skills Groups.",
                'css' => "assets/css/main.css",
        ];

        public function view($page = 'home')
        {

                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                    // Load the correct template data.
                if ($page === 'home') {
                $data = $this->homeData;
                } else if ($page === 'services') {
                        $data = $this->servicesData;
                } else if ($page === 'staff') {
                        $data = $this->staffData;
                } else if ($page === 'pups') {
                        $data = $this->pupsData;
                } else if ($page === 'newsletter') {
                        $data = $this->newsletterData;
                } else if ($page === 'location') {
                        $data = $this->locationData;
                } else if ($page === 'contact') {
                        $data = $this->contactData;
                } else {
                        show_404();
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}