package com.mta.th10.bacsigiadinh.fragments.sub;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.db.BenhDB;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.webkit.WebView;
import android.widget.ImageButton;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.Benh;

public class ChiTietBenhFragment extends Fragment implements ITitleFragment {
	private Benh benh;
	private ImageButton bt;

	public ChiTietBenhFragment(Benh b) {
		this.benh = b;
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View view = inflater.inflate(R.layout.fragment_chitietbenh, null);
		WebView webView = (WebView) view.findViewById(R.id.webview_benh);
		bt = (ImageButton) view.findViewById(R.id.bt_set_fav_benh);
		bt.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// Update favoriate
				if (benh.isFavorite())
				{
					benh.setFavorite(false);
					BenhDB.setFavorite(benh, false);
					bt.setImageResource(R.drawable.ic_fav_no);
				}
				else
				{
					benh.setFavorite(true);
					BenhDB.setFavorite(benh, true);
					bt.setImageResource(R.drawable.ic_fav_on);
				}
			}
		});

		if (this.benh.isFavorite())
			bt.setImageResource(R.drawable.ic_fav_on);
		else
			bt.setImageResource(R.drawable.ic_fav_no);

		webView.getSettings().setDefaultTextEncodingName("utf-8");
		webView.loadData(this.benh.getContent(), "text/html; charset=utf-8", null);
		MainActivity.Current.updateTitle(this);
		return view;
	}

	@Override
	public String getTitle() {
		return benh.getTen();
	}
}
