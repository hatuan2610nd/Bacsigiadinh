package com.mta.th10.bacsigiadinh.fragments.sub;

import java.util.ArrayList;
import java.util.List;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.adapters.ThuocAdapter;
import com.mta.th10.bacsigiadinh.db.ThuocDB;

import android.os.Bundle;
import android.os.IInterface;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ListView;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class DanhSachThuocFragment extends Fragment implements OnItemClickListener, ITitleFragment {

	private List<Thuoc> listThuoc;
	private NhomThuoc nhom;
	private ListView listview;
	ThuocAdapter adapter;

	public DanhSachThuocFragment(NhomThuoc nhom) {
		listThuoc = new ArrayList<Thuoc>();
		this.nhom = nhom;
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_danhsachthuoc, null);
		listview = (ListView) v.findViewById(R.id.listview_danhsach_thuoc);
		listThuoc = (new ThuocDB()).getListThuocFromNhomThuoc(nhom);

		adapter = new ThuocAdapter(getContext(), R.layout.item_thuoc, listThuoc);
		listview.setAdapter(adapter);
		listview.setOnItemClickListener(this);

		getActivity().runOnUiThread(new Runnable() {
			@Override
			public void run() {
				//listThuoc = (new ThuocDB()).getListThuocFromNhomThuoc(nhom);
			//	adapter.notifyDataSetChanged();
			}
		});

		return v;
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int pos, long arg3) {
		ChiTietThuocFragment f = new ChiTietThuocFragment(listThuoc.get(pos));
		MainActivity.Current.showFragment(f);
	}

	@Override
	public String getTitle() {
		return this.nhom.getTitle();
	}
}
