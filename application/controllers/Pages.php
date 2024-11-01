<?php
class Pages extends CI_Controller {

        private $homeData = [
                'title' => "Center for Social Success | Dallas, Tx.",
                'description' => "Let us help you with social skills guidance and animal assisted therapy to improve your interpersonal relations at the Center for Social Success in Dallas, Tx.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/" />',
        ];

        private $staffData = [
                'title' => "CSS Meet Our Professionals",
                'description' => "CSS Proffesionals, specializing in a wide variety of services to help you every day.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/staff" />',
        ];

        private $pupsData = [
                'title' => "CSS Meet the Therapy Pups",
                'description' => "Our pups are here to help you find fuzzy hope. All are small breed and hypoallergenic.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/pups" />',
        ];

        private $newsletterData = [
                'title' => "CSS Newsletter",
                'description' => "The newletter from the staff of the Center for Social Success covering social skills for parents and teens.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/newsletter" />',
        ];

        private $locationData = [
                'title' => "CSS Location",
                'description' => "Our CSS office location in Dallas, Tx. Call for more information or an appointment.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/location" />',
        ];

        private $contactData = [
                'title' => "CSS Contact Page",
                'description' => "Sends an email to the CSS Office. Our office staff will contact you soon if you use our contact page.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/contact" />',
        ];

        private $servicesData = [
                'title' => "CSS Services",
                'description' => "Let us help you in all of your social skills in Dallas, including Family, individual counseling and group therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/services" />',
        ];

        private $socialData = [
                'title' => "CSS Social Skills Group",
                'description' => "Let us help you in all of your social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/social" />',
        ];

        private $playData = [
                'title' => "CSS Play Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/play" />',
        ];

        private $teenData = [
                'title' => "CSS Teen and Adolescents Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/teen" />',
        ];

        private $animalData = [
                'title' => "CSS Animal Assisted Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/animal" />',
        ];

        private $adultData = [
                'title' => "CSS Young Adult and Adult Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/adult" />',
        ];

        private $familyData = [
                'title' => "CSS Family/Parenting Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/family" />',
        ];

        private $emdrData = [
                'title' => "CSS EMDR",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/emdr" />',
        ];

        private $sandtrayData = [
                'title' => "CSS Sand Tray and Art Therapy",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/sandtray" />',
        ];

        private $scheduleData = [
                'title' => "CSS Group Therapy Schedule",
                'description' => "Let us help you in all of your social interactions and social skills. Family, individual counseling and group therapy including animal assisted therapy and play therapy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/schedule" />',
        ];

        private $article1Data = [
                'title' => "CSS Newsletter Article 1",
                'description' => "Encourage appropriate social skills with friends. Whether they meet up to hang out or a friend comes over for a play date, helping your child to navigate these social situations can be intimidating.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/article1" />',
        ];

        private $article2Data = [
                'title' => "CSS Newsletter Article 2",
                'description' => "Creating indepenence within your teenager. We delve into practical strategies that empower both parents and teenagers on the journey towards autonomy.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/article2" />',
        ];

        private $article3Data = [
                'title' => "CSS Newsletter Article 3",
                'description' => "Help raising confident kids. Parenting is perhaps one of the most difficult tasks we will face in our lifetime, and one of the many challenges of parenthood is helping to raise a confident child.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/article3" />',
        ];

        private $article4Data = [
                'title' => "CSS Newsletter Article 4",
                'description' => "Back to school. Starting a new school year will come with trials and errors. Do not let setbacks discourage you.",
                'canonical' => '<link rel="canonical" href="https://cssdallas.com/article4" />',
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
                } else if ($page === 'article1') {
                        $data = $this->article1Data;
                } else if ($page === 'article2') {
                        $data = $this->article2Data;
                } else if ($page === 'article3') {
                        $data = $this->article3Data;
                } else if ($page === 'article4') {
                        $data = $this->article4Data;
                } else {
                        show_404();
                }
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}