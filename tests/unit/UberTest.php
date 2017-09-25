
<?php


class UberTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testDeveCriarUmaRotaAproximada()
    {


    }



}





/*private double getDistanceInfo(double lat1, double lng1, String destinationAddress) {
            StringBuilder stringBuilder = new StringBuilder();
            Double dist = 0.0;
            try {

            destinationAddress = destinationAddress.replaceAll(" ","%20");    
            String url = "http://maps.googleapis.com/maps/api/directions/json?origin=" + latFrom + "," + lngFrom + "&destination=" + latTo + "," + lngTo + "&mode=driving&sensor=false";

            HttpPost httppost = new HttpPost(url);

            HttpClient client = new DefaultHttpClient();
            HttpResponse response;
            stringBuilder = new StringBuilder();


                response = client.execute(httppost);
                HttpEntity entity = response.getEntity();
                InputStream stream = entity.getContent();
                int b;
                while ((b = stream.read()) != -1) {
                    stringBuilder.append((char) b);
                }
            } catch (ClientProtocolException e) {
            } catch (IOException e) {
            }

            JSONObject jsonObject = new JSONObject();
            try {

                jsonObject = new JSONObject(stringBuilder.toString());

                JSONArray array = jsonObject.getJSONArray("routes");

                JSONObject routes = array.getJSONObject(0);

                JSONArray legs = routes.getJSONArray("legs");

                JSONObject steps = legs.getJSONObject(0);

                JSONObject distance = steps.getJSONObject("distance");

                Log.i("Distance", distance.toString());
                dist = Double.parseDouble(distance.getString("text").replaceAll("[^\\.0123456789]","") );

            } catch (JSONException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }

            return dist;
        }*/