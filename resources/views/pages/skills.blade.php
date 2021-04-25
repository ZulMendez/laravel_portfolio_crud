<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">
      <div class="section-title">
        @foreach ($skills as $skill)
        <h2>{{$skill->titre}}</h2>
        <p>{{$skill->description}}</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">HTML <i class="val">{{$skill->html}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->html}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">{{$skill->css}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">{{$skill->javascript}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
            <span class="skill">PHP <i class="val">{{$skill->php}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">{{$skill->cms}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">{{$skill->photoshop}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Skills Section -->
