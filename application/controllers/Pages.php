<?php
class Pages extends CI_Controller {

        private $homeData = [
                'title' => "Center for Social Success || Dallas, Tx.",
                'description' => "Let us help you in all of your social interactions. Family, individual and group therapy including animal assisted services",
        ];

        private $staffData = [
                'title' => "Meet Our Professionals",
                'description' => "CSS Proffesionals, specializing in a wide variety of services to help you every day.",
        ];

        private $pupsData = [
                'title' => "Meet the Therapy Pups",
                'description' => "Our pups are here to help you find fuzzy hope. All are small breed and hypoallergenic.",
        ];

        private $newsletterData = [
                'title' => "CSS Newsletter",
                'description' => "The monthly newletter from the desk of Erin Lozano.",
        ];

        private $locationData = [
                'title' => "CSS Location",
                'description' => "Our CSS office location. Call for more information or an appointment.",
        ];

        private $contactData = [
                'title' => "CSS Contact Page",
                'description' => "Sends an email to the CSS Office. Our office staff will contact you soon if you use our contact page.",
        ];

        private $servicesData = [
                'title' => "CSS Services",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $socialData = [
                'title' => "CSS Social Skills Group",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $playData = [
                'title' => "CSS Play Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $teenData = [
                'title' => "CSS Teen and Adolescents Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $animalData = [
                'title' => "CSS Aminal Assited Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $adultData = [
                'title' => "CSS Young Adult and Adult Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $familyData = [
                'title' => "CSS Family/Parenting Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
        ];

        private $scheduleData = [
                'title' => "CSS Group Therapy Schedule",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
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
                } else if ($page === 'social') {
                        $data = $this->socialData;
                } else if ($page === 'play') {
                        $data = $this->playData;
                } else if ($page === 'teen') {
                        $data = $this->teenData;
                } else if ($page === 'animal') {
                        $data = $this->animalData;
                } else if ($page === 'adult') {
                        $data = $this->adultData;
                } else if ($page === 'family') {
                        $data = $this->familyData;
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
                } else if ($page === 'schedule') {
                        $data = $this->scheduleData;
                } else {
                        show_404();
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}