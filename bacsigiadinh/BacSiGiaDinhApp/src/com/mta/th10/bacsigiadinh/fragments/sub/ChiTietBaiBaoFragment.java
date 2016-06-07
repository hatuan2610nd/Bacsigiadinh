package com.mta.th10.bacsigiadinh.fragments.sub;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.viewmodels.RssItem;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class ChiTietBaiBaoFragment extends Fragment {
	private WebView web;
	private RssItem selectedItem;
	private ProgressDialog dialog;

	public ChiTietBaiBaoFragment(RssItem item) {
		this.selectedItem = item;

	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View view = inflater.inflate(R.layout.fragment_chitiet_baibao, null);
		web = (WebView) view.findViewById(R.id.rss_webview);

		web.getSettings().setJavaScriptEnabled(false);

		dialog = ProgressDialog.show(MainActivity.Current, "Tải dữ liệu!", "Đang tải...");

		web.setWebViewClient(new WebViewClient() {
			@Override
			public void onPageFinished(WebView view, String url) {
				if (dialog != null && dialog.isShowing())
					dialog.dismiss();
				super.onPageFinished(view, url);
			}

			@Override
			public void onReceivedError(WebView view, int errorCode, String description, String failingUrl) {
				if (dialog != null && dialog.isShowing())
					dialog.dismiss();
				AlertDialog dialog = new AlertDialog.Builder(MainActivity.Current).create();
				dialog.setTitle("Opps!");
				dialog.setMessage("Tải trang bị lỗi!");
				dialog.setButton("", new DialogInterface.OnClickListener() {
					@Override
					public void onClick(DialogInterface dialog, int which) {
						MainActivity.Current.onBackPressed();
					}
				});
				dialog.show();

				super.onReceivedError(view, errorCode, description, failingUrl);
			}
		});
		web.loadUrl(this.selectedItem.getLink());
		return view;
	}
}
