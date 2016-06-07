package com.mta.th10.bacsigiadinh.adapters;

import java.util.List;

import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.viewmodels.MainMenuItem;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class GridMenuAdapter extends ArrayAdapter<MainMenuItem> {
	private List<MainMenuItem> items;
	private int viewId;
	private Context context;

	public GridMenuAdapter(Context context, int viewId, List<MainMenuItem> items) {
		super(context, viewId, items);
		this.items = items;
		this.context = context;
		this.viewId = viewId;
	}

	@Override
	public View getView(int position, View convertView, ViewGroup parent) {

		if (convertView == null)
		{
			LayoutInflater l = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
			convertView = l.inflate(viewId,null);
		}
		
			

		ImageView image = (ImageView) convertView.findViewById(R.id.item_menu_image);
		TextView title = (TextView) convertView.findViewById(R.id.item_menu_title);
		image.setImageResource(items.get(position).getImageId());
		title.setText(items.get(position).getTitle());
		return convertView;
	}

}
