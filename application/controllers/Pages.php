<?php
class Pages extends CI_Controller {

        private $homeData = [
                'title' => "Center for Social Success || Dallas, Tx.",
                'description' => "Let us help you in all of your social interactions. Family, individual and group therapy including animal assisted services",
                'canonical' => '<link rel="canonical" href="http://cssdallas.com" />',
        ];

        private $staffData = [
                'title' => "Meet Our Professionals",
                'description' => "CSS Proffesionals, specializing in a wide variety of services to help you every day.",
                'canonical' => "",
        ];

        private $pupsData = [
                'title' => "Meet the Therapy Pups",
                'description' => "Our pups are here to help you find fuzzy hope. All are small breed and hypoallergenic.",
                'canonical' => "",
        ];

        private $newsletterData = [
                'title' => "CSS Newsletter",
                'description' => "The newletter from the staff of the Center for Social Success covering social skills for parents and teens.",
                'canonical' => "",
        ];

        private $locationData = [
                'title' => "CSS Location",
                'description' => "Our CSS office location in Dallas, Tx. Call for more information or an appointment.",
                'canonical' => "",
        ];

        private $contactData = [
                'title' => "CSS Contact Page",
                'description' => "Sends an email to the CSS Office. Our office staff will contact you soon if you use our contact page.",
                'canonical' => "",
        ];

        private $servicesData = [
                'title' => "CSS Services",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $socialData = [
                'title' => "CSS Social Skills Group",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $playData = [
                'title' => "CSS Play Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $teenData = [
                'title' => "CSS Teen and Adolescents Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $animalData = [
                'title' => "CSS Aminal Assited Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $adultData = [
                'title' => "CSS Young Adult and Adult Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $familyData = [
                'title' => "CSS Family/Parenting Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $emdrData = [
                'title' => "CSS EMDR",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $sandtrayData = [
                'title' => "CSS Sand Tray and Art Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
        ];

        private $scheduleData = [
                'title' => "CSS Group Therapy Schedule",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => "",
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
                }else if ($page === 'emdr') {
                        $data = $this->emdrData;
                }else if ($page === 'sandtray') {
                        $data = $this->sandtrayData;
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