package com.mta.th10.bacsigiadinh;

import java.io.BufferedReader;
import java.io.DataInputStream;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.nio.charset.Charset;
import java.nio.charset.CharsetEncoder;
import java.util.Scanner;

import com.mta.th10.bacsigiadinh.helpers.MyHelper;

import android.app.Activity;
import android.os.Bundle;
import android.util.Log;
import android.webkit.WebView;

public class TimNhaThuocActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tim_nha_thuoc);

		//
		WebView webView = (WebView) findViewById(R.id.www);
		try {
			String html = "";
			String line;
			// Scanner scanner = new Scanner();
			InputStreamReader reader = new InputStreamReader(getAssets().open("t"), "utf-8");
			BufferedReader buff = new BufferedReader(reader);
			while ((line = buff.readLine()) != null)
				html += line;

			Log.d("TimNhaThuocActivity", html);
			MyHelper.setContentForWebview(webView, html);
		} catch (Exception e) {
			// TODO: handle exception
		}

	}

}
