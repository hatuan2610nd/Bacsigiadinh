package com.mta.th10.bacsigiadinh.helpers;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import com.mta.th10.bacsigiadinh.MainActivity;

import android.app.Activity;
import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.webkit.WebView;

public class MyHelper {

	public static void setContentForWebview(WebView web, String html) {
		web.getSettings().setDefaultTextEncodingName("utf-8");
		web.loadData(html, "text/html; charset=utf-8", null);
	}

	public static void Log(String title, String mess) {
		android.util.Log.d(title, mess);
	}

	public static boolean checkInternetConnection() {
		ConnectivityManager cm = (ConnectivityManager) MainActivity.Current
				.getSystemService(Context.CONNECTIVITY_SERVICE);
		if (cm != null) {
			NetworkInfo[] nets = cm.getAllNetworkInfo();
			if (nets != null) {
				for (int i = 0; i < nets.length; i++) {
					if (nets[i].getState() == NetworkInfo.State.CONNECTED)
						return true;
				}
			}
		}
		return false;
	}

	public static String InputStreamToString(InputStream is) {
		try {
			BufferedReader reader = new BufferedReader(new InputStreamReader(is));
			StringBuilder content = new StringBuilder();
			String line;
			while ((line = reader.readLine()) != null)
				content.append(line);
			return content.toString();
		} catch (IOException e) {
			e.printStackTrace();
			return e.getMessage();
		}
	}
}
