package com.mta.th10.bacsigiadinh.adapters;

import java.util.List;
import com.mta.th10.bacsigiadinh.R;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.models.NhomBenh;
import mta.th10.bacsigiadinh.models.NhomThuoc;

public class GroupItemAdapter extends ArrayAdapter<IGroupItem> {
	private List<IGroupItem> listItem;
	private Context context;
	private int viewId;

	public GroupItemAdapter(Context context, List<IGroupItem> objects) {
		super(context, R.layout.item_basic, objects);
		this.context = context;
		this.viewId = R.layout.item_basic;
		this.listItem = objects;

	}

	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
		BaseItemViewHolder holder;

		if (convertView == null) {
			LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
			convertView = inflater.inflate(viewId, null);
			holder = new BaseItemViewHolder();
			holder.title = (TextView) convertView.findViewById(R.id.item_basic_title);
			holder.image = (ImageView) convertView.findViewById(R.id.item_basic_image);
			convertView.setTag(holder);
		} else {
			holder = (BaseItemViewHolder) convertView.getTag();
		}

		holder.title.setText(listItem.get(position).getTitle());

		switch (listItem.get(position).getType()) {
		case NhomThuoc:
			holder.image.setImageResource(R.drawable.ic_pill);
			break;
		case NhomBenh:
			holder.image.setImageResource(R.drawable.ic_cross);
			break;
		case Benh:
			holder.image.setImageResource(R.drawable.ic_cross3);
			break;
		case Thuoc:
			holder.image.setImageResource(R.drawable.ic_pill);
			break;
		default:
			break;
		}

		return convertView;
	}

	static class BaseItemViewHolder {
		TextView title;
		ImageView image;
	}
}