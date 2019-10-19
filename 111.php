String state;

float P_speed;

int sun_X, sun_Y;
int sun_mass;
float sun_size;

float[] planet_X, planet_Y;
float[] planet_speed;
float[] planet_X_vector, planet_Y_vector;
float[] planet_X_F, planet_Y_F;
float[] planet_mass;
float[] planet_size;
int[] planet_state;

int planet_num;

float G=6.67408;


void setup() {

  fullScreen();

  P_speed=1;

  state="1_setup";
}

void draw() {
  background(255);


  if (state=="1_setup") {

    sun_X=width/2;
    sun_Y=height/2;
    sun_mass=3330;
    sun_size=2*sqrt(sun_mass/3.14);

    planet_num=10000;

    planet_X=new float[planet_num];
    planet_Y=new float[planet_num];
    planet_speed=new float[planet_num];
    planet_X_vector=new float[planet_num];
    planet_Y_vector=new float[planet_num];
    planet_X_F=new float[planet_num];
    planet_Y_F=new float[planet_num];
    planet_mass=new float[planet_num];
    planet_size=new float[planet_num];
    planet_state=new int[planet_num];

    for (int i=0; i<planet_num; i++) {
      planet_X[i]=random(0, width);
      planet_Y[i]=random(0, height);
      planet_speed[i]=random(5, 10);
      planet_X_vector[i]=planet_speed[i]*-(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_Y_vector[i]=planet_speed[i]*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
      planet_mass[i]=1;
      planet_size[i]=10;
      planet_state[i]=0;
    }

    state="1_run";
  }

  if (state=="1_run") {

    noStroke();

    for (int i=0; i<planet_num; i++) {
      if (dist(planet_X[i],planet_Y[i],sun_X,sun_Y)>width) {
        planet_state[i]=1;
      }
      if (planet_state[i]==0) {
        planet_X_F[i]=G*sun_mass*planet_mass[i]/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_X-planet_X[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
        planet_Y_F[i]=G*sun_mass*planet_mass[i]/sq(dist(sun_X, sun_Y, planet_X[i], planet_Y[i]))*(sun_Y-planet_Y[i])/dist(sun_X, sun_Y, planet_X[i], planet_Y[i]);
        planet_X_vector[i]=planet_X_vector[i]+planet_X_F[i];
        planet_Y_vector[i]=planet_Y_vector[i]+planet_Y_F[i];
        
        planet_X[i]+=P_speed*planet_X_vector[i];
        planet_Y[i]+=P_speed*planet_Y_vector[i];

        fill(0);
        ellipse(planet_X[i], planet_Y[i], planet_size[i], planet_size[i]);
      }
    }

    fill(255, 255, 0);
    ellipse(sun_X, sun_Y, sun_size, sun_size);
  }
}