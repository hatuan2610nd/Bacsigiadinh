package com.mta.th10.bacsigiadinh.adapters;

import java.util.List;

import com.mta.th10.bacsigiadinh.R;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;
import mta.th10.bacsigiadinh.models.Thuoc;

public class ThuocAdapter extends ArrayAdapter<Thuoc> {
	private Context context;
	private int viewId;
	private List<Thuoc> listThuoc;

	public ThuocAdapter(Context context, int viewId, List<Thuoc> objects) {
		super(context, viewId, objects);
		this.context = context;
		this.viewId = viewId;
		this.listThuoc = objects;
	}

	// Danh sach thuoc co the nhieu nen su dung ViewHolder
	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
		ThuocViewHolder vholder;
		if (convertView == null) {
			LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
			convertView = inflater.inflate(viewId, null);

			vholder = new ThuocViewHolder();
			vholder.title = (TextView) convertView.findViewById(R.id.item_thuoc_title);
			convertView.setTag(vholder);
		} else {
			vholder = (ThuocViewHolder) convertView.getTag();
		}

		// Cai dat cac thuoc tinh
		vholder.title.setText(listThuoc.get(position).getTenThuoc());

		return convertView;
	}

	static class ThuocViewHolder {
		TextView title;
	}
}
