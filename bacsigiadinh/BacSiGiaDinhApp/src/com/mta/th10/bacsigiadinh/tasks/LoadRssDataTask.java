package com.mta.th10.bacsigiadinh.tasks;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.simpleframework.xml.Serializer;
import org.simpleframework.xml.core.Persister;

import com.mta.th10.bacsigiadinh.fragments.TinTucFragment;
import com.mta.th10.bacsigiadinh.helpers.MyHelper;
import com.mta.th10.bacsigiadinh.viewmodels.Rss;
import com.mta.th10.bacsigiadinh.viewmodels.RssItem;

import android.os.AsyncTask;
import android.util.Log;

public class LoadRssDataTask extends AsyncTask<TinTucFragment, Void, Rss> {
	private TinTucFragment context;

	@Override
	protected Rss doInBackground(TinTucFragment... arg0) {
		try {
			 context = arg0[0];
			 Serializer serializer = new Persister();
			 HttpClient clien = new DefaultHttpClient();
			 HttpGet getRequest = new HttpGet(TinTucFragment.url);
			 HttpResponse response = clien.execute(getRequest);
			
			
			 String s =
			 MyHelper.InputStreamToString(response.getEntity().getContent());
			 Log.d("test", s);
			 Rss r = serializer.read(Rss.class, s);
			 
			 for(RssItem i : r.getChannel().getItems())
			 {
				 Log.d("check", i.getTitle());
			 }
			 
			 return r;

//			StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
//			StrictMode.setThreadPolicy(policy);
//			String myUri = "http://vnexpress.net/rss/suc-khoe.rss";
//			HttpClient httpClient = new DefaultHttpClient();
//			HttpGet get = new HttpGet(myUri);
//
//			HttpResponse response;
//			try {
//				response = httpClient.execute(get);
//				String bodyHtml = EntityUtils.toString(response.getEntity());
//				Log.d("content", bodyHtml);
//
//			} catch (Exception e) {
//				// TODO Auto-generated catch block
//				e.printStackTrace();
//			}
//
//			return null;
		} catch (Exception e) {
			Log.d("LoadRssDataTask", e.getMessage());
			return null;
		}
	}

	@Override
	protected void onPostExecute(Rss result) {
		context.LoadDataXong(result);
		super.onPostExecute(result);
	}

}
