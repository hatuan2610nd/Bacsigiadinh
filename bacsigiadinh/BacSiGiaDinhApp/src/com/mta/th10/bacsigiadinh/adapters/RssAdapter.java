package com.mta.th10.bacsigiadinh.adapters;

import java.util.List;

import com.koushikdutta.urlimageviewhelper.UrlImageViewHelper;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.viewmodels.RssItem;

import android.app.Activity;
import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class RssAdapter extends ArrayAdapter<RssItem> {
	private Context context;
	private int viewId;
	private List<RssItem> items;

	public RssAdapter(Context context, int viewId, List<RssItem> objects) {
		super(context, viewId, objects);
		this.context = context;
		this.viewId = viewId;
		this.items = objects;
	}

	@Override
	public View getView(int position, View view, ViewGroup parent) {

		RssViewHolder holder;

		if (view == null) {
			LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
			view = inflater.inflate(viewId, null);

			holder = new RssViewHolder();
			holder.title = (TextView) view.findViewById(R.id.item_rss_title);
			holder.image = (ImageView) view.findViewById(R.id.item_rss_image);
			holder.desc = (TextView) view.findViewById(R.id.item_rss_desc);

			view.setTag(holder);
		} else {
			holder = (RssViewHolder) view.getTag();
		}

		// set
		holder.title.setText(items.get(position).getTitle());
		holder.desc.setText(items.get(position).getPubDate());

		String imageURL = items.get(position).getImageUrl();
		if (imageURL != null)
		{
			Log.d("image: ", imageURL);
			 UrlImageViewHelper.setUrlDrawable(holder.image, imageURL);
		}

		return view;
	}

	static class RssViewHolder {
		ImageView image;
		TextView title;
		TextView desc;
		TextView time;
	}
}
