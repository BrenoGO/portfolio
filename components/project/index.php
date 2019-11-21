<?php
echo '
  <div class="project" id="proj-'.$key.'">
    <img src="imgs/projects/'.$proj['img'].'" class="projectImg">
    <div class="projectContent">
      <span class="title">'.$proj['name'].'</span>
      <p class="description">
        '.$proj['description'].'
      </p>
      <a href="'.$proj['href'].'" target="_blank">'.$proj['href'].'</a></br>
      code: <a href="'.$proj['git'].'" target="_blank">'.$proj['git'].'</a>
      <div class="technologies">
        <span class="devTitle">Development</span>
        ';
        foreach ($proj['tecnologies'] as $tech => $arr) {
          echo '
            <div class="tech">
              <span class="techTitle">'.$tech.'</span>
              <ul class="techList">
              ';
                foreach ($arr as $value) {
                  echo '<li class="techListItem">'.$value.'</li>';
                }
              echo '
              </ul>
            </div>
          ';
        }
        echo '
      </div>
    </div>
  </div>
';
