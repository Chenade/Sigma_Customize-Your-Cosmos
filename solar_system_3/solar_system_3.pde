String state;

float P_speed;

int sun_X, sun_Y;
int sun_mass;
float sun_size;

float[] planet_X, planet_Y;

float[] planet_speed;
int planet_speed_max;
int planet_speed_min;

float[] planet_X_vector, planet_Y_vector;
float[] planet_X_a, planet_Y_a;

float[] planet_mass;
int planet_mass_max;
int planet_mass_min;

float[] planet_size;
int planet_size_max;
int planet_size_min;

float[] planet_color_r;
float[] planet_color_g;
float[] planet_color_b;

int[] planet_state;

PImage[] planet;
PImage sun;
PImage background;

int planet_num;

float G=6.67408;



int textsize;
int text_x, text_y;
int xp, yp;
int time, t, blink;
int count;


void setup() {

  //fullScreen();
  size(1920, 1080);

  planet=new PImage[8];

  planet[0]=loadImage("planet_0.png");
  planet[1]=loadImage("planet_1.png");
  planet[2]=loadImage("planet_2.png");
  planet[3]=loadImage("planet_3.png");
  planet[4]=loadImage("planet_4.png");
  planet[5]=loadImage("planet_5.png");
  planet[6]=loadImage("planet_6.png");
  planet[7]=loadImage("planet_7.png");

  sun=loadImage("sun.png");
  background=loadImage("background.png");

  imageMode(CORNER);
  //image(background, 0, 0, width, height);
  background(0);


  noStroke();


  textsize=24;
  text_x=1200 ;
  text_y=40;
  textSize(textsize);

  time=0;
  t=100;







  state="0_setup";
}


void draw() {

  imageMode(CENTER);

  if (state=="0_setup") {


    P_speed=1;

    sun_X=width/2;
    sun_Y=height/2;
    sun_mass=500;
    sun_size=75;


    planet_num=1;
    setup_array();

    planet_mass_max=1;
    planet_mass_min=1;


    for (int i=0; i<planet_num; i++) {


      float degree=random(0, 360);
      float distance=5*sun_size;
      planet_X[i]=sun_X+distance*cos(degree);
      planet_Y[i]=sun_Y+distance*sin(degree);
      planet_speed[i]=P_speed*sqrt(G*sun_mass/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]));
      planet_X_vector[i]=planet_speed[i]*-(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_vector[i]=planet_speed[i]*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_mass[i]=random(planet_mass_min, planet_mass_max);
    }





    state="0_run";
  }

  if (state=="0_run") {
    background(0);


    for (int i=0; i<planet_num; i++) {


      planet_X_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]); 
      planet_X_vector[i]=planet_X_vector[i]+planet_X_a[i];
      planet_Y_vector[i]=planet_Y_vector[i]+planet_Y_a[i];

      planet_X[i]+=P_speed*planet_X_vector[i];
      planet_Y[i]+=P_speed*planet_Y_vector[i];

      text("click the screen to continue", planet_X[i]-150, planet_Y[i]);
    }





    image(sun, sun_X, sun_Y, sun_size, sun_size);

    if (mousePressed) {


      state="1_setup";
    }
  }







  if (state=="1_setup"&&mousePressed==false) {

    P_speed=0.5;

    sun_X=width/2;
    sun_Y=height/2;
    sun_mass=3330;
    sun_size=75;


    planet_num=25000;
    setup_array();

    planet_speed_max=10;
    planet_speed_min=5;

    planet_mass_max=10;
    planet_mass_min=1;

    planet_size_max=2;
    planet_size_min=2;

    for (int i=0; i<planet_num; i++) {


      planet_X[i]=random(0, width);
      planet_Y[i]=random(-width/2, height+width/2);
      planet_speed[i]=random(planet_speed_min, planet_speed_max);
      planet_X_vector[i]=planet_speed[i]*-(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_vector[i]=planet_speed[i]*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_mass[i]=random(planet_mass_min, planet_mass_max);
      planet_size[i]=random(planet_size_min, planet_size_max);

      planet_color_r[i]=255;
      planet_color_g[i]=random(0, 255);
      planet_color_b[i]=0;

      //planet_color_r[i]=random(0, 255);
      //planet_color_g[i]=random(0, 255);
      //planet_color_b[i]=random(0, 255);
      planet_state[i]=0;

      time=0;
      count=0;





      state="1_run";
    }
  }




  if (state=="1_run") {
    background(0);

    for (int i=0; i<planet_num; i++) {
      fill(planet_color_r[i], planet_color_g[i], planet_color_b[i]);
    }

    run();
    fill(255);

    if (time==t) {
      time=0;
      count++;
    }

    if (count>=0) {

      text("The nebular hypothesis says that the Solar System", text_x, 2*text_y );
    }
    if (count>=1) {
      text("formed from the gravitational collapse of a fragment", text_x, 4*text_y );
    }
    if (count>=2) {
      text("of a giant molecular cloud. The cloud was about 20", text_x, 6*text_y );
    }
    if (count>=3) {
      text("parsec (65 light years) across, while the fragments", text_x, 8*text_y );
    }
    if (count>=4) {
      text("were roughly 1 parsec across. The further collapse of", text_x, 10*text_y );
    }
    if (count>=5) {
      text("the fragments led to the formation of dense cores", text_x, 12*text_y );
    }
    if (count>=6) {
      text("0.01–0.1 pc (2,000–20,000 AU) in size.", text_x, 14*text_y );
    }
    if (count>=7&&time%10!=0) {

      text("click the screen to continue", text_x, 18*text_y);
    }


    //text
    if (mousePressed&&count>=7) {

      state="2_setup";
    }
  }





  if (state=="2_setup"&&mousePressed==false) {

    P_speed=1;

    sun_X=width/2;
    sun_Y=height/2;
    sun_mass=15000;
    sun_size=75;

    planet_num=5000;
    setup_array();

    planet_speed_max=5;
    planet_speed_min=1;

    planet_mass_max=10;
    planet_mass_min=1;

    planet_size_max=1;
    planet_size_min=1;

    for (int i=0; i<planet_num; i++) {

      float degree=random(0, 360);
      float distance=random(sun_size, height/2);
      planet_X[i]=sun_X+distance*cos(degree);
      planet_Y[i]=sun_Y+distance*sin(degree);
      //planet_X[i]=random(0,width);
      //planet_Y[i]=random(-width,height+width);
      planet_speed[i]=P_speed*sqrt(G*sun_mass/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]));
      //planet_speed[i]=random(planet_speed_min, planet_speed_max);
      planet_X_vector[i]=planet_speed[i]*-(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_vector[i]=planet_speed[i]*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_mass[i]=random(planet_mass_min, planet_mass_max);
      planet_size[i]=random(planet_size_min, planet_size_max);
      planet_color_r[i]=255;
      planet_color_g[i]=random(0, 255);
      planet_color_b[i]=0;
      planet_state[i]=0;
    }

    time=0;
    count=0;

    state="2_run";
  }





  if (state=="2_run") {

    background(0);

    run();


    for (int i=0; i<planet_num; i++) {
      for (int n=0; n<planet_num; n++) {

        if (i!=n&&dist(planet_X[n], planet_Y[n], planet_X[i], planet_Y[i])<(planet_size[i]+planet_size[n])/2&&planet_state[n]!=1&&planet_state[i]!=1) {

          planet_X_a[i]+=G*planet_mass[n]/sq(dist(planet_X[n], planet_Y[n], planet_X[i], planet_Y[i]))*(planet_X[n]-planet_X[i])/dist(planet_X[n], planet_Y[n], planet_X[i], planet_Y[i]);
          planet_Y_a[i]+=G*planet_mass[n]/sq(dist(planet_X[n], planet_Y[n], planet_X[i], planet_Y[i]))*(planet_Y[n]-planet_Y[i])/dist(planet_X[n], planet_Y[n], planet_X[i], planet_Y[i]);

          planet_X[i]+=P_speed*planet_X_vector[i];
          planet_Y[i]+=P_speed*planet_Y_vector[i];
          if (planet_mass[i]>=planet_mass[n]) {
            planet_state[n]=1;

            planet_X_vector[i]=(planet_mass[i]*planet_X_vector[i]+planet_mass[n]*planet_X_vector[n])/(planet_mass[i]+planet_mass[n]);
            planet_Y_vector[i]=(planet_mass[i]*planet_Y_vector[i]+planet_mass[n]*planet_Y_vector[n])/(planet_mass[i]+planet_mass[n]);

            planet_X[i]=(planet_mass[i]*planet_X[i]+planet_mass[n]*planet_X[n])/(planet_mass[i]+planet_mass[n]);
            planet_Y[i]=(planet_mass[i]*planet_Y[i]+planet_mass[n]*planet_Y[n])/(planet_mass[i]+planet_mass[n]);

            planet_mass[i]+=planet_mass[n];

            if (planet_size[i]<20) {

              planet_size[i]=planet_size[i]+sqrt(planet_size[n]);
            }
          } else {
            planet_state[i]=1;

            planet_X_vector[n]=(planet_mass[i]*planet_X_vector[i]+planet_mass[n]*planet_X_vector[n])/(planet_mass[i]+planet_mass[n]);
            planet_Y_vector[n]=(planet_mass[i]*planet_Y_vector[i]+planet_mass[n]*planet_Y_vector[n])/(planet_mass[i]+planet_mass[n]);

            planet_X[n]=(planet_mass[i]*planet_X[i]+planet_mass[n]*planet_X[n])/(planet_mass[i]+planet_mass[n]);
            planet_Y[n]=(planet_mass[i]*planet_Y[i]+planet_mass[n]*planet_Y[n])/(planet_mass[i]+planet_mass[n]);

            planet_mass[n]+=planet_mass[i];

            if (planet_size[n]<20) {
              planet_size[n]=planet_size[n]+sqrt(planet_size[i]);
            }
          }
        }
      }
    }

    fill(255);
    if (time==t) {
      time=0;
      count++;
    }

    if (count>=0) {
      text("Because of the conservation of angular momentum,", text_x, 2*text_y );
    }
    if (count>=1) {
      text("the nebula spun faster as it collapsed. As the material", text_x, 4*text_y );
    }
    if (count>=2) {
      text("within the nebula condensed, the atoms within it began", text_x, 6*text_y );
    }
    if (count>=3) {
      text("to collide with increasing frequency, converting their", text_x, 8*text_y );
    }
    if (count>=4) {
      text("kinetic energy into heat. The center, where most of the", text_x, 10*text_y );
    }
    if (count>=5) {
      text("mass collected, became increasingly hotter than the", text_x, 12*text_y );
    }
    if (count>=6) {
      text("surrounding disc.", text_x, 14*text_y );
    }
    if (count>=7&&time%10!=0) {

      text("click the screen to continue", text_x, 18*text_y);
    }




    //text
    if (mousePressed&&count>=7) {


      state="3_setup";
    }
  }





  if (state=="3_setup"&&mousePressed==false) {


    P_speed=1;

    sun_X=width/2;
    sun_Y=height/2;
    sun_mass=333;


    planet_num=8;
    setup_array();





    for (int i=0; i<planet_num; i++) {

      float degree=random(0, 360);
      float distance=height/2*(i+1)/8;
      planet_X[i]=sun_X+distance*cos(degree);
      planet_Y[i]=sun_Y+distance*sin(degree);
      planet_speed[i]=P_speed*sqrt(G*sun_mass/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]));
      //planet_speed[i]=random(planet_speed_min, planet_speed_max);
      planet_X_vector[i]=planet_speed[i]*-(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_vector[i]=planet_speed[i]*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);

      planet_state[i]=0;
    }
    planet_mass[0]=0.055;
    planet_mass[1]=0.815;
    planet_mass[2]=1;
    planet_mass[3]=0.107;
    planet_mass[4]=317.9;
    planet_mass[5]=95.2;
    planet_mass[6]=14.52;
    planet_mass[7]=17.06;


    time=0;
    count=0;






    state="3_run";
  }





  if ( state=="3_run") {

    background(0);

    image(sun, sun_X, sun_Y, sun_size, sun_size);




    for (int i=0; i<planet_num; i++) {
      if (dist(planet_X[i], planet_Y[i], sun_X, sun_Y)>width) {
        planet_state[i]=1;
      }
      if (planet_state[i]==0) {
        planet_X_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
        planet_Y_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
        planet_X_vector[i]=planet_X_vector[i]+planet_X_a[i];
        planet_Y_vector[i]=planet_Y_vector[i]+planet_Y_a[i];

        planet_X[i]+=P_speed*planet_X_vector[i];
        planet_Y[i]+=P_speed*planet_Y_vector[i];
      }
    }


    image(planet[0], planet_X[0], planet_Y[0], 20, 20);
    image(planet[1], planet_X[1], planet_Y[1], 45, 45);
    image(planet[2], planet_X[2], planet_Y[2], 45, 45);
    image(planet[3], planet_X[3], planet_Y[3], 65, 50);
    image(planet[4], planet_X[4], planet_Y[4], 120, 120);
    image(planet[5], planet_X[5], planet_Y[5], 100, 50);
    image(planet[6], planet_X[6], planet_Y[6], 40, 40);
    image(planet[7], planet_X[7], planet_Y[7], 45, 45);


    fill(255);

    if (time==t) {
      time=0;
      count++;
    }
    if (count>=0) {
      text("The various planets are thought to have formed from", text_x, 2*text_y );
    }
    if (count>=1) {
      text("the solar nebula, the disc-shaped cloud of gas and", text_x, 4*text_y );
    }
    if (count>=2) {
      text(" dust left over from the Sun's formation. The currently ", text_x, 6*text_y );
    }
    if (count>=3) {
      text("method by which the planets formed is accretion, in which", text_x, 8*text_y );
    }
    if (count>=4) {
      text("accepted the planets began as dust grains in orbit around ", text_x, 10*text_y );
    }
    if (count>=5) {
      text("the central protester. Through direct contact and ", text_x, 12*text_y );
    }
    if (count>=6) {
      text("self-organization, these grains formed in turn collided", text_x, 14*text_y );
    }
    if (count>=7) {

      text("to form larger bodies.", text_x, 16*text_y );
    }
    if (count>=8) {
      text("click the screen to continue", text_x, 18*text_y);
    }
    if (mousePressed&&count>=8) {

      exit();
    }
  }

  time+=1;
}

void setup_array() {
  planet_X=new float[planet_num];
  planet_Y=new float[planet_num];
  planet_speed=new float[planet_num];
  planet_X_vector=new float[planet_num];
  planet_Y_vector=new float[planet_num];
  planet_X_a=new float[planet_num];
  planet_Y_a=new float[planet_num];
  planet_mass=new float[planet_num];
  planet_size=new float[planet_num];
  planet_color_r=new float[planet_num];
  planet_color_g=new float[planet_num];
  planet_color_b=new float[planet_num];
  planet_state=new int[planet_num];
}
void run() {




  for (int i=0; i<planet_num; i++) {
    if (dist(planet_X[i], planet_Y[i], sun_X, sun_Y)>width) {
      planet_state[i]=1;
    }
    if (planet_state[i]==0) {
      planet_X_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_a[i]=G*sun_mass/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]); 
      planet_X_vector[i]=planet_X_vector[i]+planet_X_a[i];
      planet_Y_vector[i]=planet_Y_vector[i]+planet_Y_a[i];

      planet_X[i]+=P_speed*planet_X_vector[i];
      planet_Y[i]+=P_speed*planet_Y_vector[i];

      if (state=="1_run") {

        fill(planet_color_r[i], planet_color_g[i], planet_color_b[i]);
        ellipse(planet_X[i], planet_Y[i], planet_size[i], planet_size[i]);
      }

      if (state=="2_run") {

        fill(planet_color_r[i], planet_color_g[i], planet_color_b[i]);
        ellipse(planet_X[i], planet_Y[i], planet_size[i], planet_size[i]);
      }
    }
  }

  image(sun, sun_X, sun_Y, sun_size, sun_size);
}
