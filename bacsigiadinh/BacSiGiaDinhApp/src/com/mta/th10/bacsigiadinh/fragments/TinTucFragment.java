package com.mta.th10.bacsigiadinh.fragments;

import java.util.ArrayList;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.RssAdapter;
import com.mta.th10.bacsigiadinh.fragments.sub.ChiTietBaiBaoFragment;
import com.mta.th10.bacsigiadinh.tasks.LoadRssDataTask;
import com.mta.th10.bacsigiadinh.viewmodels.Rss;
import com.mta.th10.bacsigiadinh.viewmodels.RssItem;

import android.app.ProgressDialog;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import android.widget.ListView;

public class TinTucFragment extends Fragment implements ITitleFragment,OnItemClickListener {
	public static final String url = "http://www.vnexpress.net/rss/suc-khoe.rss";

	private static Rss rss;

	private ProgressDialog dialog;
	private ListView listview;
	private RssAdapter adapter;

	public TinTucFragment() {

	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_main_tintuc, container, false);
		listview = (ListView) v.findViewById(R.id.rss_listview);
		
		adapter = new RssAdapter(getContext(), R.layout.item_rss, new ArrayList<RssItem>());
		listview.setAdapter(adapter);
		listview.setOnItemClickListener(this);
		
		// tai trang
		if (rss == null) {
			new LoadRssDataTask().execute(this);
			dialog = ProgressDialog.show(getActivity(), "Tải dữ liệu", "Đang tải");
			dialog.setCancelable(false);
		} else {
			HienThiDuLieu();
		}

		return v;
	}

	@Override
	public String getTitle() {
		return "Tin tức";
	}

	public void LoadDataXong(Rss rss) {
		TinTucFragment.rss = rss;
		dialog.dismiss();
		HienThiDuLieu();
	}

	public void HienThiDuLieu() {
		if (rss == null) {
			Log.d("test", "ko được");
		} else {
			Log.d("check", "HienThiDuLieu");
			
			adapter.addAll(TinTucFragment.rss.getChannel().getItems());
			adapter.notifyDataSetChanged();

		}
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int arg2, long arg3) {
		ChiTietBaiBaoFragment f = new ChiTietBaiBaoFragment(TinTucFragment.rss.getChannel().getItems().get(arg2));
		MainActivity.Current.showFragment(f);
	}

}
