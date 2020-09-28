@extends('layouts.web')
@section('title')
    Matt Laszkiewicz | Resumé
@endsection

@section('content')
    <page-title :title="'Resumé'"></page-title>
    <comp-nav></comp-nav>
    <div class="page-content">
        <div class="row justify-content-center">
            <a href="/downloads/Resume_011.docx" download="Matt_Laszkiewicz_Resumé">
                <button class="btn btn-dark res-btn">Download</button>
            </a>
            <div class="about-section dark">
                <h3>Professional Summary</h3>
                <p>
                    I have experience in unique environments that have allowed me to
                    gain applicable skills for the connected and digital world. Having
                    one bachelors in communications and media studies, finishing up another
                    degree in applied computing, while working as an intern and on freelance
                    projects has given me the opportunity to learn skills from others and
                    build skills on my own.
                </p>
            </div>
            <div class="about-section">
                <h3>Skills</h3>
                <div class="row">
                    <div class="col-lg-4">
                            <ul>
                                <li>Laravel</li>
                                <li>Java</li>
                                <li>C#/.NET MVC</li>
                                <li>HTML</li>
                                <li>CSS/Sass</li>
                            </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <li>Javascript</li>
                            <li>S3</li>
                            <li>Vue.js</li>
                            <li>MySQL</li>
                            <li>Wordpress</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <li>Heroku</li>
                            <li>Adobe Photoshop</li>
                            <li>Adobe Illustrator</li>
                            <li>Figma</li>
                            <li>Git</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-section dark">
            <h3>Education</h3>

            <h4>
                UW-Milwaukee/ Applied Computing/2021
            </h4>
            <p>
                This bachelor’s degree in computer engineering allows me to gain
                the applicable skills to become an effective IT professional. I have
                taken courses applicable to the real world including business classes,
                applied mathematics, object-oriented programming with Java and C#,
                database management, computer security, web development and more.
            </p>

            <h4>St. Norbert College/ Communication and Media Studies/2018</h4>

            <p>
                Vice president of the student-run media club Green Knight TV, which
                won Organization of the Year at St. Norbert College. Attended the
                Washington Media Institute for a semester as one of ten students around
                the country. Volunteered at the non-profit organization, The Farmory,
                in Green Bay creating digital marketing material.
            </p>
        </div>

        <div class="about-section">
            <h3>Experience</h3>
            <h4>Milk Can Dev and Design LLC</h4>
            <h6>Developer Intern/ Aug 2019 – Present</h6>
            <p>Used both WordPress and the Laravel PHP framework to
                update and maintain both client and company sites. Increased
                my skills in HTML, SASS, CSS, PHP, Vue.js, JQuery, Git and MySQL.
                All of these skills were skills that I needed to learn on the job
                to keep up with the updates.(Currently Furloughed Due to Covid)
            </p>
            <h4>Dynatect Manufacturing</h4>
            <h6>Marketing and Branding Intern/ May 2017 – Aug 2017</h6>
            <p>Created marketing material with the Adobe Creative Suite
                and migrated content from one CMS to WordPress
            </p>
            <h4>Ghost Note Agency</h4>
            <h6>Marketing and Branding Intern/ Jan 2016 – May 2016</h6>
            <p>Created branding and marketing material for social media for both Ghost Note
                and their clients. Utilized the Adobe Creative Suite, HTML, CSS, and WordPress.
            </p>
        </div>

    </div>
@endsection
